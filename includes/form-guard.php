<?php
/**
 * Shared bot / spam protection for the public forms.
 *
 * Three layers, cheapest first:
 *   1. Honeypot   - a hidden field humans never see and never fill.
 *   2. Throttle   - best-effort per-IP submission limit.
 *   3. Turnstile  - Cloudflare Turnstile, verified server-side.
 *
 * Reads its keys from environment variables so nothing sensitive is
 * committed. Set these in Vercel -> Project -> Settings -> Environment
 * Variables (same place as the MAIL_* values used by includes/mailer.php):
 *
 *   TURNSTILE_SITE_KEY     public site key  (safe to render in the page)
 *   TURNSTILE_SECRET_KEY   secret key       (server-side only, never output)
 *
 * IMPORTANT: when the keys are absent the Turnstile layer is skipped so the
 * forms keep working instead of failing shut on a misconfigured deploy. The
 * honeypot and throttle still apply. Set both keys in every environment for
 * the protection to actually be active - a missing key is logged via
 * error_log().
 */

/** Cloudflare's server-side token verification endpoint. */
const TURNSTILE_VERIFY_URL = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

/**
 * Verification timeouts, in seconds. Kept deliberately tight: the whole
 * request (verify + send mail) has to finish inside the serverless function's
 * execution limit, so two attempts must still fit comfortably within it.
 * Cloudflare normally answers in well under a second.
 */
const TURNSTILE_CONNECT_TIMEOUT_SECONDS = 4;
const TURNSTILE_TIMEOUT_SECONDS = 6;
/** Only retry a failure that came back faster than this. */
const TURNSTILE_RETRY_BUDGET_SECONDS = 2.0;

/** Hidden field name. Looks attractive to a bot, ignored by the backend. */
const FORM_GUARD_HONEYPOT = 'website';

/** Throttle: at most this many submissions per IP per window. */
const FORM_GUARD_MAX_SUBMISSIONS = 5;
const FORM_GUARD_WINDOW_SECONDS = 600;

/** The single user-facing message for every bot-protection rejection. */
const FORM_GUARD_MESSAGE = "Please verify that you're not a robot and try again.";

/**
 * The public site key, or '' when Turnstile is not configured.
 *
 * @return string
 */
function turnstile_site_key()
{
    return trim((string) getenv('TURNSTILE_SITE_KEY'));
}

/**
 * Whether both Turnstile keys are configured.
 *
 * @return bool
 */
function turnstile_enabled()
{
    return turnstile_site_key() !== '' && trim((string) getenv('TURNSTILE_SECRET_KEY')) !== '';
}

/**
 * Print the Turnstile widget for a form.
 *
 * Renders nothing when Turnstile is not configured, so the surrounding form
 * layout is unchanged on an unconfigured environment.
 *
 * @param string $theme 'light' or 'dark', to match the form it sits in
 * @param string $size  'normal' or 'flexible' (flexible fills narrow columns)
 * @return void
 */
function turnstile_widget($theme = 'light', $size = 'flexible')
{
    if (!turnstile_enabled()) {
        return;
    }

    printf(
        '<div class="coss-field"><div class="cf-turnstile" data-sitekey="%s" data-theme="%s" data-size="%s" data-refresh-expired="auto"></div></div>',
        htmlspecialchars(turnstile_site_key(), ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($theme, ENT_QUOTES, 'UTF-8'),
        htmlspecialchars($size, ENT_QUOTES, 'UTF-8')
    );
}

/**
 * Print the honeypot field. Hidden from people, offered to bots.
 *
 * @return void
 */
function form_guard_honeypot()
{
    printf(
        '<div style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;" aria-hidden="true">'
            . '<label for="%1$s">Leave this field empty</label>'
            . '<input type="text" id="%1$s" name="%1$s" value="" tabindex="-1" autocomplete="off">'
            . '</div>',
        FORM_GUARD_HONEYPOT
    );
}

/**
 * Best-effort client IP, used only for throttling.
 *
 * Vercel terminates the request at its edge, so REMOTE_ADDR is the proxy and
 * the real address arrives in x-forwarded-for / x-real-ip. Those headers are
 * spoofable in principle, which is why this is used for throttling only and
 * never as a security boundary on its own.
 *
 * @return string
 */
function form_guard_client_ip()
{
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $parts = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $ip = trim($parts[0]);
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
            return $ip;
        }
    }

    if (!empty($_SERVER['HTTP_X_REAL_IP']) && filter_var($_SERVER['HTTP_X_REAL_IP'], FILTER_VALIDATE_IP)) {
        return $_SERVER['HTTP_X_REAL_IP'];
    }

    return $_SERVER['REMOTE_ADDR'] ?? 'unknown';
}

/**
 * Best-effort per-IP submission throttle.
 *
 * Backed by the system temp directory. On Vercel that is per serverless
 * instance rather than global, so this trims rapid bursts rather than
 * enforcing a hard global ceiling. Turnstile remains the primary control.
 *
 * @return bool True when the submission is within the limit.
 */
function form_guard_within_rate_limit()
{
    $file = sys_get_temp_dir() . '/akani-form-' . hash('sha256', form_guard_client_ip()) . '.json';
    $now = time();

    $hits = [];
    if (is_file($file)) {
        $decoded = json_decode((string) @file_get_contents($file), true);
        if (is_array($decoded)) {
            // Keep only the hits still inside the sliding window.
            foreach ($decoded as $timestamp) {
                if (is_int($timestamp) && ($now - $timestamp) < FORM_GUARD_WINDOW_SECONDS) {
                    $hits[] = $timestamp;
                }
            }
        }
    }

    if (count($hits) >= FORM_GUARD_MAX_SUBMISSIONS) {
        return false;
    }

    $hits[] = $now;
    @file_put_contents($file, json_encode($hits), LOCK_EX);

    return true;
}

/**
 * Verify a Turnstile token with Cloudflare.
 *
 * The secret key is only ever sent from here to Cloudflare; it is never
 * rendered into a page or returned to the browser.
 *
 * @param string $token The cf-turnstile-response value from the form
 * @return bool         True only on an explicit success from Cloudflare
 */
function turnstile_verify($token)
{
    $secret = trim((string) getenv('TURNSTILE_SECRET_KEY'));
    if ($secret === '' || $token === '') {
        return false;
    }

    // remoteip is deliberately omitted: behind Vercel's proxy the forwarded
    // address can differ from what Cloudflare observed, which would reject
    // legitimate submissions.
    $payload = http_build_query(['secret' => $secret, 'response' => $token]);

    // A single dropped connection should not cost a real enquiry, so retry
    // once before giving up. An explicit rejection from Cloudflare is final
    // and is never retried - only transport failures are. The retry is only
    // worth attempting when the first failure came back quickly; retrying
    // after a full timeout would risk overrunning the function's own limit.
    $startedAt = microtime(true);
    $body = turnstile_post($payload);
    if ($body === false && (microtime(true) - $startedAt) < TURNSTILE_RETRY_BUDGET_SECONDS) {
        usleep(300000);
        $body = turnstile_post($payload);
    }

    if ($body === false) {
        // Fail closed: no confirmation from Cloudflare means no email.
        error_log('Turnstile: could not reach Cloudflare; submission rejected.');
        return false;
    }

    $result = json_decode($body, true);
    if (!is_array($result) || empty($result['success'])) {
        // Log the codes for debugging; never surface them to the browser.
        $codes = isset($result['error-codes']) && is_array($result['error-codes'])
            ? implode(', ', $result['error-codes'])
            : 'unknown';
        error_log('Turnstile: verification rejected - ' . $codes);
        return false;
    }

    return true;
}

/**
 * POST the verification payload to Cloudflare.
 *
 * @param string $payload URL-encoded request body
 * @return string|false   Raw response body, or false on a transport failure
 */
function turnstile_post($payload)
{
    $body = false;

    if (function_exists('curl_init')) {
        $ch = curl_init(TURNSTILE_VERIFY_URL);
        curl_setopt_array($ch, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => TURNSTILE_TIMEOUT_SECONDS,
            CURLOPT_CONNECTTIMEOUT => TURNSTILE_CONNECT_TIMEOUT_SECONDS,
            // Resolve over IPv4. Serverless egress is IPv4 anyway, and on a
            // host with half-working IPv6 the dual-stack attempt stalls until
            // the timeout instead of falling back - which would fail every
            // verification and take the forms down with it.
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
        ]);
        $body = curl_exec($ch);
        if ($body === false) {
            error_log('Turnstile: verification request failed - ' . curl_error($ch));
        }
        curl_close($ch);
    } else {
        $context = stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => $payload,
                'timeout' => TURNSTILE_TIMEOUT_SECONDS,
                'ignore_errors' => true,
            ],
        ]);
        $body = @file_get_contents(TURNSTILE_VERIFY_URL, false, $context);
        if ($body === false) {
            error_log('Turnstile: verification request failed (stream).');
        }
    }

    return $body;
}

/**
 * Run every bot-protection layer for the current POST request.
 *
 * Call this before any side effect - sending email, storing a submission,
 * or anything else a bot could trigger.
 *
 * @return bool True when the submission may proceed.
 */
function form_guard_passes()
{
    // 1. Honeypot - a filled hidden field means an automated submission.
    if (trim((string) ($_POST[FORM_GUARD_HONEYPOT] ?? '')) !== '') {
        error_log('Form guard: honeypot triggered from ' . form_guard_client_ip());
        return false;
    }

    // 2. Throttle.
    if (!form_guard_within_rate_limit()) {
        error_log('Form guard: rate limit hit for ' . form_guard_client_ip());
        return false;
    }

    // 3. Turnstile. Skipped (with a loud log) when the keys are absent so a
    //    misconfigured environment degrades instead of blocking every form.
    if (!turnstile_enabled()) {
        error_log('Form guard: TURNSTILE_SITE_KEY / TURNSTILE_SECRET_KEY are not configured; Turnstile check skipped.');
        return true;
    }

    return turnstile_verify(trim((string) ($_POST['cf-turnstile-response'] ?? '')));
}

/**
 * FORM_GUARD_MESSAGE as a JS string literal, safe to drop into an inline
 * alert(). The message contains an apostrophe, so it cannot be pasted into a
 * single-quoted JS string as-is.
 *
 * @return string
 */
function form_guard_js_message()
{
    return json_encode(FORM_GUARD_MESSAGE, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_TAG | JSON_HEX_AMP);
}

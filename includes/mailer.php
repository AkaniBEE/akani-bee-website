<?php
/**
 * Shared SMTP mailer helper (PHPMailer).
 *
 * Reads all SMTP credentials from environment variables so nothing
 * sensitive is committed to the repository. Set these in
 * Vercel → Project → Settings → Environment Variables:
 *
 *   MAIL_HOST        e.g. mail.akanibee.co.za
 *   MAIL_PORT        587 (TLS) or 465 (SSL)
 *   MAIL_USERNAME    info@akanibee.co.za
 *   MAIL_PASSWORD    the mailbox password
 *   MAIL_ENCRYPTION  tls or ssl
 *   MAIL_TO          info@akanibee.co.za   (where submissions are delivered)
 *   MAIL_FROM        no-reply@akanibee.co.za (optional; defaults to MAIL_USERNAME)
 */

require_once __DIR__ . '/../lib/PHPMailer/PHPMailer.php';
require_once __DIR__ . '/../lib/PHPMailer/SMTP.php';
require_once __DIR__ . '/../lib/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Send an email via SMTP.
 *
 * @param string $subject      Email subject line
 * @param string $body         Plain-text body
 * @param string $replyToEmail Reply-to address (the submitter's email)
 * @param string $replyToName  Reply-to name (the submitter's name)
 * @return bool                True on success, false on failure
 */
function send_smtp_mail($subject, $body, $replyToEmail = '', $replyToName = '')
{
    $host = getenv('MAIL_HOST');
    $username = getenv('MAIL_USERNAME');
    $password = getenv('MAIL_PASSWORD');
    $port = getenv('MAIL_PORT') ?: 587;
    $encryption = strtolower(getenv('MAIL_ENCRYPTION') ?: 'tls');
    $to = getenv('MAIL_TO') ?: 'info@akanibee.co.za';
    $from = getenv('MAIL_FROM') ?: $username;

    // If SMTP isn't configured, fail clearly instead of silently.
    if (!$host || !$username || !$password) {
        error_log('Mailer: SMTP environment variables are not configured.');
        return false;
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = $host;
        $mail->SMTPAuth = true;
        $mail->Username = $username;
        $mail->Password = $password;
        $mail->Port = (int) $port;

        if ($encryption === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } else {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        }

        $mail->setFrom($from, 'Akani BEE Ratings Website');
        $mail->addAddress($to);

        if ($replyToEmail && filter_var($replyToEmail, FILTER_VALIDATE_EMAIL)) {
            $mail->addReplyTo($replyToEmail, $replyToName ?: $replyToEmail);
        }

        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->isHTML(false);

        $mail->send();
        return true;
    } catch (Exception $e) {
        error_log('Mailer error: ' . $mail->ErrorInfo);
        return false;
    }
}

<?php
/**
 * Single serverless entry point for all pages.
 *
 * Vercel's Hobby plan allows at most 12 serverless functions per deployment,
 * and vercel-php creates one function per built .php file. Routing every
 * request through this file keeps the deployment at exactly one function.
 * See vercel.json: "/" and "/*.php" are rewritten here.
 */

$root = dirname(__DIR__);

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$page = basename($path);
if ($path === '/' || $page === '' || $page === 'index.php' && $path === '/api/index.php') {
    $page = 'index.php';
}

// Only serve real .php files that exist at the project root (basename()
// already prevents directory traversal).
if (!preg_match('/^[a-zA-Z0-9._()-]+\.php$/', $page) || !is_file($root . '/' . $page)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=utf-8');
    echo 'Page not found.';
    exit;
}

// Every page is identical for every visitor, so let Vercel's edge serve it and
// keep the PHP function out of the hot path. max-age=0 keeps browsers honest
// (they always revalidate, so content changes are picked up immediately) while
// s-maxage lets the edge answer for 5 minutes - which is what removes the
// multi-second cold start the first visitor after a quiet period was paying.
// POSTs (the form handlers) are never cached.
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'GET') {
    header('Cache-Control: public, max-age=0, s-maxage=300, stale-while-revalidate=86400');
}

// The project's *.vercel.app address serves a full public copy of the site.
// It already canonicals to akanibee.co.za; this keeps it out of search entirely.
$host = $_SERVER['HTTP_HOST'] ?? '';
if (substr($host, -11) === '.vercel.app') {
    header('X-Robots-Tag: noindex, nofollow');
}

// Pages use relative includes ('includes/footer.php') and relative file
// paths ('downloads/...'), so run them from the project root.
chdir($root);
require $root . '/' . $page;

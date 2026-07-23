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

// Pages use relative includes ('includes/footer.php') and relative file
// paths ('downloads/...'), so run them from the project root.
chdir($root);
require $root . '/' . $page;

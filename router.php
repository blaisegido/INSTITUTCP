<?php
// router.php for PHP built-in web server
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$file = __DIR__ . $uri;

if ($uri !== '/' && file_exists($file) && !is_dir($file)) {
    return false; // Serve static file as-is
}

$path = trim($uri, '/');

if ($path === '' || $path === 'index' || $path === 'index.php') {
    require __DIR__ . '/index.php';
    exit;
}

if ($path === 'a-propos' || $path === 'linstitut' || $path === 'linstitut.php') {
    require __DIR__ . '/a-propos.php';
    exit;
}

if (file_exists(__DIR__ . '/' . $path . '.php')) {
    require __DIR__ . '/' . $path . '.php';
    exit;
}

require __DIR__ . '/index.php';

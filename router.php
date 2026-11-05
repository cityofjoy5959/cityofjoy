<?php
// router.php - Local Development Router for Clean URLs
$rawUri = $_SERVER['REQUEST_URI'];
$parsedUri = parse_url($rawUri, PHP_URL_PATH);
$path = urldecode($parsedUri);

// Canonical redirects if someone browses directly to .php extensions in browser
$canonicalRedirects = [
    '/index.php' => '/',
    '/aboutpage.php' => '/about',
    '/service.php' => '/services',
    '/privacypolicypage.php' => '/privacy-policy',
    '/termsandconditionpage.php' => '/terms-and-conditions',
];

if (isset($canonicalRedirects[$path])) {
    header("Location: " . $canonicalRedirects[$path], true, 301);
    exit;
}

// Redirect trailing slashes for clean page URLs (e.g. /about/ -> /about)
if ($path !== '/' && substr($path, -1) === '/') {
    $redirectUrl = rtrim($path, '/');
    if (!empty($_SERVER['QUERY_STRING'])) {
        $redirectUrl .= '?' . $_SERVER['QUERY_STRING'];
    }
    header("Location: " . $redirectUrl, true, 301);
    exit;
}

// Serve static assets directly (CSS, images, fonts, JS, video)
$filePath = __DIR__ . $path;
if ($path !== '/' && file_exists($filePath) && !is_dir($filePath) && !preg_match('/\.php$/i', $path)) {
    return false; // let built-in server handle static asset
}

// Clean URL Route Mapping
$routes = [
    '/' => 'index.php',
    '/about' => 'aboutpage.php',
    '/services' => 'service.php',
    '/service' => 'service.php',
    '/privacy-policy' => 'privacypolicypage.php',
    '/privacypolicy' => 'privacypolicypage.php',
    '/terms-and-conditions' => 'termsandconditionpage.php',
    '/terms' => 'termsandconditionpage.php',
    '/termsandconditions' => 'termsandconditionpage.php',
];

$trimmedPath = rtrim($path, '/');
if ($trimmedPath === '') {
    $trimmedPath = '/';
}

if (isset($routes[$trimmedPath])) {
    require __DIR__ . '/' . $routes[$trimmedPath];
    exit;
}

// Generic fallback: check if file without extension exists with .php
if (file_exists(__DIR__ . $trimmedPath . '.php')) {
    require __DIR__ . $trimmedPath . '.php';
    exit;
}

// If route not found
http_response_code(404);
echo "<!DOCTYPE html><html><head><title>404 Not Found</title><link rel='stylesheet' href='/dist/output.css'></head><body class='bg-stone-50 flex items-center justify-center min-h-screen text-center font-sans'><div class='space-y-4'><h1 class='text-4xl font-bold text-stone-900'>Page Not Found</h1><p class='text-stone-600'>The page you are looking for does not exist.</p><a href='/' class='inline-block px-6 py-2.5 rounded-full bg-[#FF5454] text-white font-semibold text-sm hover:opacity-90 transition-all'>Return to Home</a></div></body></html>";
exit;

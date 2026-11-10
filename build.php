<?php
// build.php - Static Site Compiler for Netlify Deployment

echo "Starting Static HTML build for Netlify...\n";

$distDir = __DIR__ . '/public';

// Helper: recursive copy
function copyDir($src, $dst) {
    if (!file_exists($dst)) {
        mkdir($dst, 0755, true);
    }
    $dir = opendir($src);
    while (false !== ($file = readdir($dir))) {
        if ($file !== '.' && $file !== '..') {
            if (is_dir($src . '/' . $file)) {
                copyDir($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

// Clean / initialize public directory
if (!file_exists($distDir)) {
    mkdir($distDir, 0755, true);
}

// Pages to compile
$pages = [
    '/' => [
        'file' => 'index.php',
        'output' => $distDir . '/index.html'
    ],
    '/about' => [
        'file' => 'aboutpage.php',
        'output' => $distDir . '/about/index.html'
    ],
    '/services' => [
        'file' => 'service.php',
        'output' => $distDir . '/services/index.html'
    ],
    '/privacy-policy' => [
        'file' => 'privacypolicypage.php',
        'output' => $distDir . '/privacy-policy/index.html'
    ],
    '/terms-and-conditions' => [
        'file' => 'termsandconditionpage.php',
        'output' => $distDir . '/terms-and-conditions/index.html'
    ]
];

// Set server variables for SEO helper
$_SERVER['HTTPS'] = 'on';
$_SERVER['HTTP_HOST'] = 'cityofjoytherapy.com';

foreach ($pages as $uri => $info) {
    $_SERVER['REQUEST_URI'] = $uri;
    
    $outDir = dirname($info['output']);
    if (!file_exists($outDir)) {
        mkdir($outDir, 0755, true);
    }

    ob_start();
    include __DIR__ . '/' . $info['file'];
    $html = ob_get_clean();

    file_put_contents($info['output'], $html);
    echo "  [OK] Rendered {$uri} -> " . str_replace(__DIR__ . '/', '', $info['output']) . " (" . strlen($html) . " bytes)\n";
}

// Copy static assets
echo "Copying static assets...\n";

// 1. Assets folder
if (file_exists(__DIR__ . '/assets')) {
    copyDir(__DIR__ . '/assets', $distDir . '/assets');
    echo "  [OK] Copied /assets directory\n";
}

// 2. Dist CSS
if (file_exists(__DIR__ . '/dist')) {
    copyDir(__DIR__ . '/dist', $distDir . '/dist');
    echo "  [OK] Copied /dist CSS directory\n";
}

// 3. Sitemap & Robots
if (file_exists(__DIR__ . '/sitemap.xml')) {
    copy(__DIR__ . '/sitemap.xml', $distDir . '/sitemap.xml');
    echo "  [OK] Copied sitemap.xml\n";
}

if (file_exists(__DIR__ . '/robots.txt')) {
    copy(__DIR__ . '/robots.txt', $distDir . '/robots.txt');
    echo "  [OK] Copied robots.txt\n";
}

// 4. Google Site Verification files
$googleFiles = glob(__DIR__ . '/google*.html');
if (!empty($googleFiles)) {
    foreach ($googleFiles as $gFile) {
        $baseGFile = basename($gFile);
        copy($gFile, $distDir . '/' . $baseGFile);
        echo "  [OK] Copied {$baseGFile}\n";
    }
}

echo "Static site build complete in /public folder!\n";


<?php
define('VENDOR_STS', ltrim(dirname(__DIR__) . '/vendor/sts/core/Core', '/'));
define('APP_STORAGE_PATH', ltrim(dirname(__DIR__) . '/storage', '/'));

// Set the autoload path
require_once 'bootstrap/app.php';

use STS\Core\Application;
use STS\Core\Utils\FileCache;

// Initialize the application
//$app = new Application();

// Initialize the application with cache support
$app = new FileCache(storage_path('cache') . 'app_cache.php');

// Set the application configuration
$cache = $app->set('loaded_application', [
    'loaded' => true,
    'config' => [
        'app_name' => 'My Application',
        'app_version' => '1.0.0',
        'app_url' => 'https://example.com/my-application',
        'app_debug' => true,
        'app_timezone' => 'UTC',
        'cache_enabled' => true,
        'cache_driver' => 'file',
        'cache_path' => storage_path('cache'),
        //...
    ]
]);

// Run the application
$app->saveCache();
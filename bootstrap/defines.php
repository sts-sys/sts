<?php
define('APP_STORAGE_PATH', ltrim(dirname(__DIR__) . '/storage', '/'));
define('APP_PUBLIC_PATH', ltrim(dirname(__DIR__) . '/public', '/'));
define('APP_PATH', ltrim(dirname(__DIR__), '/'));

// Define constants for the application paths

define('storage_path', APP_STORAGE_PATH);
define('public_path', APP_PUBLIC_PATH);
define('resources_path', APP_PATH. '/resources');
define('themes_path', APP_PATH. '/themes');

// Define constants for the application directories
define('cache_path', APP_STORAGE_PATH . '/cache/');
define('logs_path', APP_STORAGE_PATH . '/logs/');
define('sessions_path', APP_STORAGE_PATH . '/sessions/');
define('uploads_path', APP_STORAGE_PATH . '/uploads/');

// Define constants for the application framework
define('APP_FRAMEWORK_VERSION', '3.0.0');
define('APP_FRAMEWORK_NAME', 'STS Framework');

// Define constants for the base URL and other settings
define('base_url', 'http://127.0.0.25/'); // Replace with your own base URL if necessary
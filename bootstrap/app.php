<?php
if(!defined('VENDOR_STS')) die('Access Denied');

var_dump(VENDOR_STS);
require_once VENDOR_STS . '/Utils/FileCache.php';
require_once VENDOR_STS . '/Utils/Autoloader.php';
require_once VENDOR_STS . '/fallback_autoload.php';

use STS\Core\Utils\Autoloader;

$autoloader = new Autoloader(dirname(VENDOR_STS) . '/cache/');
$autoloader->generateClassMap(VENDOR_STS);

$autoloader->autoloadFiles([
    VENDOR_STS . '/Helpers/globals.php'
]);

/*$autoloader->autoloadNamespaces([
    'App\\' => __DIR__. '/app/',
    'Core\\' => __DIR__. '/src/Core/',
    'Database\\' => __DIR__. '/src/Database/',
    'Tests\\' => __DIR__. '/tests/',
]);*/

// Register the autoloader after registering the namespaces and files
$autoloader->register();
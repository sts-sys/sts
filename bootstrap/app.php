<?php
if(!defined('VENDOR_STS')) die('Access Denied');
define('not_install', __DIR__ . '/install/');

// Check if the STS Framework is installed
if(!file_exists(VENDOR_STS)) {
    include not_install . 'not-install.php';
    return;
}

// Unset the not_install constant to prevent direct access to the installation file
if(file_exists(VENDOR_STS)) rmdir(not_install);

require_once VENDOR_STS . '/Utils/FileCache.php';
require_once VENDOR_STS . '/Utils/Autoloader.php';
require_once VENDOR_STS . '/fallback_autoload.php';

use STS\Core\Utils\Autoloader;

$autoloader = new Autoloader(dirname(VENDOR_STS) . '/cache/');
$autoloader->generateClassMap(VENDOR_STS);

$autoloader->autoloadFiles([
    VENDOR_STS . '/Helpers/globals.php'
]);

// Register the autoloader after registering the namespaces and files
$autoloader->register();
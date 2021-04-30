<?php

/**
 * DRM - an mini framwork php
 *
 * @package drm_frm
 * @author Vahry
 * @license http://opensource.org/licenses/MIT MIT License
 */

//chck php version
$PHPVersion = '7.2';
if (version_compare(PHP_VERSION, $PHPVersion, '<')) {
    die("Your PHP version must be {$PHPVersion} or higher to run Drm. Current version: " . PHP_VERSION);
}
unset($PHPVersion);


use Drm\Core\DRM;

//Jalankan session
if (!session_id()) session_start();

/*
 * COre DIRECTORY NAME
 *-
 * This variable must contain the name of your "core" directory.
 */
$system_core = 'core';

/*
 * SYSTEM DIRECTORY NAME
 *-
 * This variable must contain the name of your "system" directory.
 * Set the path if it is not in the same directory as this file.
 */

$system_folder = 'system';


//config system
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('DRM', ROOT . $system_folder . DIRECTORY_SEPARATOR);
define('CORE', ROOT . $system_folder . DIRECTORY_SEPARATOR . 'core');
define('CLASSES', ROOT . $system_folder . DIRECTORY_SEPARATOR . 'core/classes');
define('VENDOR', ROOT . 'vendor/');

/*
 * Error Handling system
 */
require_once DRM . 'check/error_fatal.php';
ob_start();

// Get the start time and memory for use later
defined('DRM_START_TIME') or define('DRM_START_TIME', microtime(true));
defined('DRM_START_MEM') or define('DRM_START_MEM', memory_get_usage());

//auto load composer

if (!is_file(VENDOR . 'autoload.php')) {
    die('Composer is not installed. Please run "php composer.phar update" in the root to install Composer');
}
require_once VENDOR . 'autoload.php';


/*
 * LOAD CONFIG FILE
 *-
 * This variable must contain the name of your "config" directory.
 * Set the path if it is not in the same directory as this file.
 */

DRM::init('config.php');

/*
 * LOADING 
 */
require_once DRM . 'init.php';

//MAINTANCE MODE
$maintance = 'off'; //ketik On untuk masuk mode maintance jika tidak ketik off
//memeriksa config maintenance
if ($maintance == "On") {
    echo "maintenance";
} else {
    //memulai Application
    $app = new DRM;
}
ob_end_flush();
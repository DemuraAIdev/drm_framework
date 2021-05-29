<?php

/**
 * DRM - an mini framwork php
 * Get Error? Pls Report to https://github.com/DemuraAIdev/drm_framwork/issues
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


//Base URL
define('URL_BASE', 'public'); //public FOlder
define('URL_PROTOCOL', '//'); //URL Protocol
define('URL_SERVER', $_SERVER['HTTP_HOST']); //App URL
define('URL_SUB_FOLDER', str_replace(URL_BASE, '', dirname($_SERVER['SCRIPT_NAME']))); //sub folder
define('BASEURL', URL_PROTOCOL . URL_SERVER . URL_SUB_FOLDER); //BASE

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
    die('Composer is not installed. Please run "php composer.json update" in the root to install Composer');
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
 * LOAD MAINTENACE CONFIG FILE
 */
require_once('maintenance_system.php');

/*
 * LOADING 
 */
require_once DRM . 'init.php';

if (file_exists('maintenance.php')) {
    require_once('maintenance.php');
    die(include('maintenance_page.php'));
} else {
    $app = new Drm;
    $app->run();
}


ob_end_flush();
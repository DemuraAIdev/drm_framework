<?php

/**
 * DRM - an mini framwork php
 *
 * @package drm_frm
 * @author Vahry
 * @license http://opensource.org/licenses/MIT MIT License
 */


//Jalankan session
if (!session_id()) session_start();
/*
 * Error Handling system
 */

function customError($errno, $errstr, $fileerror, $lineerror, $error_con)
{
    include '../system/check/error_handling.php';
}
set_error_handler("customError");

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

use Drm\Core\App;
//auto load composer
require ROOT . 'vendor/autoload.php';
/*
 * LOAD CONFIG FILE
 *-
 * This variable must contain the name of your "config" directory.
 * Set the path if it is not in the same directory as this file.
 */

require_once DRM . 'config/config.php';


/*
 * LOADING 
 */
require_once DRM . 'init.php';

//memeriksa config maintenance
if ($maintance == "On") {
    echo "maintenance";
} else {
    //memulai Application
    $app = new App;
}
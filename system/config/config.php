<?php

namespace Drm\Config;

//Name APP
define('APP_NAME', 'DRM');


//Base URL
define('URL_BASE', 'public'); //public FOlder
define('URL_PROTOCOL', '//'); //URL Protocol
define('URL_SERVER', $_SERVER['HTTP_HOST']); //App URL
define('URL_SUB_FOLDER', str_replace(URL_BASE, '', dirname($_SERVER['SCRIPT_NAME']))); //sub folder
define('BASEURL', URL_PROTOCOL . URL_SERVER . URL_SUB_FOLDER); //BASE

//date/Time
define('timezone', 'Asia/Jakarta'); //set timezone for date();

//Folder views
define('VFOLDER', 'views'); //nama folder views
define('LFOLDER', '/system/'); //lokasi folder view


//database config
define('dbhost', 'localhost'); //Nama host
define('dbname', 'drm_frm'); //Nama database
define('dbuser', 'root'); //nama user 
define('dbpass', ''); //password
define('dbdriver', 'mysql'); //Database Driver

//Fontawesome 
define('FONTKIT', 'https://kit.fontawesome.com/bc77b70f00.js'); //default KIT
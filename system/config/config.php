<?php

namespace Drm\config;

//Debug
define('DEBUG', true);

//Name APP
define('APP_NAME', 'DRM');

define('MAINTENANCE', false); //true, false
define('MT_REASON', 'Update System'); //maintenance Reason


//date/Time
define('timezone', 'Asia/Jakarta'); //set timezone for date();

//Folder views
define('VFOLDER', 'views'); //name folder views
define('LFOLDER', '/system/'); //locate folder view


//database config
define('dbhost', 'localhost'); //Nama host
define('dbname', 'drm_frm'); //Nama database
define('dbuser', 'root'); //nama user 
define('dbpass', ''); //password
define('dbport', '3306'); //database Port
define('dbdriver', 'mysql'); //Database Driver

define('PDO_DEBUG', true); //Debugger see log/debug/pdo


//Fontawesome 
define('FONTKIT', 'https://kit.fontawesome.com/bc77b70f00.js'); //default KIT https://kit.fontawesome.com/bc77b70f00.js
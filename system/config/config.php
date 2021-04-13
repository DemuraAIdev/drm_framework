<?php

namespace Drm\Config;


//Base URL
define('URL_BASE', 'public');
define('URL_PROTOCOL', '//');
define('URL_SERVER', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_BASE, '', dirname($_SERVER['SCRIPT_NAME'])));
define('BASEURL', URL_PROTOCOL . URL_SERVER . URL_SUB_FOLDER);


//Folder views
define('VFOLDER', 'views'); //nama folder views
define('LFOLDER', '/system/'); //lokasi folder view

//DATABASE CONFIG
define('dbhost', 'localhost'); //Nama host
define('dbname', 'drm_frm'); //Nama database
define('dbuser', 'root'); //nama user 
define('dbpass', ''); //password
define('dbdriver', 'mysql');

//MAINTANCE MODE
$maintance = 'off'; //ketik On untuk masuk mode maintance jika tidak ketik off
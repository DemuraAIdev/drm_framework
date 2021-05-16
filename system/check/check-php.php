<?php


if (file_exists(DRM . "$system_core/DRM" . ".php")) {
} else {
    if (DEBUG == false) {
        die(include('errorpage.php'));
    }
    die("File DRM.php Not Found !");
}
if (file_exists(DRM . "$system_core/Controller" . ".php")) {
} else {
    if (DEBUG == false) {
        die(include('errorpage.php'));
    }
    die("File Controller.php Not Found !");
}
if (file_exists(DRM . "config/config" . ".php")) {
} else {
    if (DEBUG == false) {
        die(include('errorpage.php'));
    }
    die("file config.php Not Found  !");
}
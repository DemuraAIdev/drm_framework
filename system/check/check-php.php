<?php

if (file_exists(DRM . "$system_core/basecore" . ".php")) {
} else {
    die("File basecore.php tidak ada !");
}
if (file_exists(DRM . "$system_core/Controller" . ".php")) {
} else {
    die("File Controller.php tidak ada !");
}
if (file_exists(DRM . "config/config" . ".php")) {
} else {
    die("file config.php tidak ada  !");
}
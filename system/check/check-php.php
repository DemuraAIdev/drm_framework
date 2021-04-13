<?php

if (file_exists(DRM . "$system_core/App" . ".php")) {
} else {
    die("File App.php tidak ada !");
}
if (file_exists(DRM . "$system_core/Controller" . ".php")) {
} else {
    die("File Controller.php tidak ada !");
}
if (file_exists(DRM . "config/config" . ".php")) {
} else {
    die("file config.php tidak ada  !");
}
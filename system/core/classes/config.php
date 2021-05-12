<?php

namespace Drm\Core\classes;

class Config
{

    public static function get($name)
    {
        require_once CLASSES . $name . 'config.php';
    }
    public function geet()
    {
        echo 'ww';
    }
}
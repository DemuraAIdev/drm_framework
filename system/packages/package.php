<?php

namespace packages;

use Drm\Core\classes\errorhandler;

class package
{
    public static function load($pack, $path)
    {
        require_once $pack . '/' . $path . '.php';
    }
}
<?php

namespace Drm\Core\classes;

class title
{
    static $title;
    public static function set($name)
    {
        self::$title = $name;
    }
    public static function get()
    {
        return self::$title;
    }
}
<?php

namespace Drm\Core\classes;

class drmsys
{

    public static function value($var)
    {
        return ($var instanceof \Closure) ? $var() : $var;
    }
}
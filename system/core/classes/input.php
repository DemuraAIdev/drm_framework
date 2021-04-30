<?php

namespace Drm\Core\classes;



class input
{

    public static function server($index = null, $default = null)
    {
        return (func_num_args() === 0) ? $_SERVER : Arry::get($_SERVER, strtoupper($index), $default);
    }
}
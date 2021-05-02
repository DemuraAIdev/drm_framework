<?php

namespace Drm\Core\classes;

class html
{
    public static function buildTag($array)
    {
        $tag = '';
        foreach ($array as $key => $value) {
            $tag .= $key . '="' . htmlspecialchars($value) . '" ';
        }
        return $tag;
    }
    public static function buildTag2($array)
    {
        $tag = '';
        foreach ($array as $key => $value) {
            $tag .= $key . '="' . htmlspecialchars($value) . '" ';
        }
        return $tag;
    }
}
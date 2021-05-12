<?php

namespace Drm\Core\classes;

class html
{

    public static function buildTag($array)
    {
        if (empty($array)) {
            return false;
        }
        $tag = '';
        foreach ($array as $key => $value) {
            $tag .= $key . '="' . htmlspecialchars($value) . '" ';
        }
        return $tag;
    }
}
<?php

namespace Drm\Core\classes;

class Arry
{
    public static function get($array, $key, $default = null)
    {
        if (!is_array($array) and !$array instanceof \ArrayAccess) {
            throw new \InvalidArgumentException('First parameter must be an array or ArrayAccess object.');
        }

        if (is_null($key)) {
            return $array;
        }

        if (is_array($key)) {
            $return = array();
            foreach ($key as $k) {
                $return[$k] = static::get($array, $k, $default);
            }
            return $return;
        }

        is_object($key) and $key = (string) $key;

        if (array_key_exists($key, $array)) {
            return $array[$key];
        }

        foreach (explode('.', $key) as $key_part) {
            if (($array instanceof \ArrayAccess and isset($array[$key_part])) === false) {
                if (!is_array($array) or !array_key_exists($key_part, $array)) {
                    return drmsys::value($default);
                }
            }

            $array = $array[$key_part];
        }

        return $array;
    }
}
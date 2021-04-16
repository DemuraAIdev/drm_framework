<?php

namespace Drm\Core\classes;


class Dates
{

    public static function showtime($type, $timez = timezone)
    {
        $timezone = timezone;

        if (empty($type)) {
            date_default_timezone_set($timez);
            echo date("Y-m-d");
        } else {
            date_default_timezone_set($timezone);
            echo date($type);
        }
    }
}
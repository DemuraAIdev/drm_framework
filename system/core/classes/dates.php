<?php

/**
 * Dates Class
 *
 * @package		Drm
 * @subpackage	Core
 * @category	classes
 * @author		Drm
 */

namespace Drm\Core\classes;

use Drm\Core\ver;

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
    public static function version()
    {
        echo ver::ClassVer('dates');
    }
}
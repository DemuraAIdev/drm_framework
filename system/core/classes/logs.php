<?php

/**
 * logs Class
 *
 * @package		Drm
 * @subpackage	Core
 * @category	classes
 * @author		Drm
 */

namespace Drm\Core\classes;

use Drm\Core\ver;

class logs
{

    public static function log($isi, $name = 'NoName')
    {
        $log  = $isi;
        file_put_contents(DRM . 'log/user/Log' . $name . date('d-m-Y') . '.txt', $log, FILE_APPEND);
    }
    public static function logerror($isi)
    {
        $error = $isi;
        file_put_contents(DRM . 'log/error/LogERR_' . date('d-m-Y') . '.txt', $error, FILE_APPEND);
    }
    public static function version()
    {
        echo ver::ClassVer('logs');
    }
    public static function debug($isi, $name)
    {
        file_put_contents(DRM . 'log/debug/' . $name . '/Log' . $name . date('d-m-Y') . '.txt', $isi, FILE_APPEND);
    }
}
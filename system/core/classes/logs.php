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

class logs
{
    public static function log($isi, $nama)
    {
        $log  = $isi;
        file_put_contents(DRM . 'log/user/Log' . $nama . date("j.n.Y") . '.txt', $log, FILE_APPEND);
    }
    public static function logerror($isi)
    {
        $error = $isi;
        file_put_contents(DRM . 'log/error/LogERR_' . date("j.n.Y") . '.txt', $error, FILE_APPEND);
    }
}
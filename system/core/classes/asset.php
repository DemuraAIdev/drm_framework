<?php

/**
 * Asset Class
 *
 * @package		Drm
 * @subpackage	Core
 * @category	classes
 * @author		Drm
 */

namespace Drm\Core\classes;

use Drm\Core\classes\errorhandler;

class Asset
{

    public static function css($namav, $attr = array())
    {
        echo '<link rel="stylesheet" href="' . BASEURL . 'css/' . $namav . '">';
    }
    public static function js($src, $attr = array())
    {
        echo '<script src="' . BASEURL . 'js/' . $src . '">';
    }
    public static function url($link, $type)
    {
        switch ($type) {
            case 'css':
                echo '<link rel="stylesheet" href="' . $link . '">';
                break;
            case 'js':
                echo '<script src="' . $link . '">';
                break;
            default:
                errorhandler::notif('type asset kosong');
                break;
        }
    }
}
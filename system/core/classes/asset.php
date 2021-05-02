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
use Drm\Core\classes\html;

class Asset
{
    public static function css($namav, $attr)
    {
        if (file_exists('css/' . $namav)) {
            echo '<link rel="stylesheet" href="' . BASEURL . 'css/' . $namav . '"' . html::buildTag($attr) . '>';
        } else {
            errorhandler::notif("Asset $namav Not Found");
        }
    }
    public static function js($src, $attr = null)
    {
        if (!file_exists('js/' . $src)) {
            errorhandler::notif("Asset $src Not Found");
        }
        echo '<script src="' . BASEURL . 'js/' . $src . '"' . html::buildTag($attr) . '>';
    }
    public static function url($link, $type, $attr = null)
    {
        switch ($type) {
            case 'css':
                echo '<link rel="stylesheet" href="' . $link . '"' . html::buildTag($attr) . '>';
                break;
            case 'js':
                echo '<script src="' . $link . '"' . html::buildTag($attr) . '>';
                break;
            default:
                errorhandler::notif('type asset kosong');
                break;
        }
    }
    public static function image($alt, $src, $attr = null)
    {
        echo '<img src="' . BASEURL . 'image/' . $src . '" alt="' . $alt . '"' . html::buildTag($attr) . '> ';
    }
    public static function fontawesome()
    {
        echo '<script src="https://use.fontawesome.com/0717083133.js"></script>';
    }
}
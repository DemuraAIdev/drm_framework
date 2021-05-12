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
    /**
     * Get CSS File
     * 
     *Usage : Asset::css('style.css', array())
     
     *Locate CSS File drm_frm/public/css/....css
     * 
     * @param string $namav
     * @param array $attr
     */
    public static function css($namav, $attr = null)
    {
        if (file_exists('css/' . $namav)) {
            echo '<link rel="stylesheet" href="' . BASEURL . 'css/' . $namav . '"' . html::buildTag($attr) . '>';
        } else {
            errorhandler::notif("Asset $namav Not Found");
        }
    }


    /**
     * Get JS File
     * 
     *Usage : Asset::js('script.js', array())

     *Locate JS File drm_frm/public/js/....js
     * 
     * @param string $src
     * @param array $attr
     */
    public static function js($src, $attr = null)
    {
        if (!file_exists('js/' . $src)) {
            errorhandler::notif("Asset $src Not Found");
        }
        echo '<script src="' . BASEURL . 'js/' . $src . '"' . html::buildTag($attr) . '>';
    }


    /**
     * Get Asset Online
     * 
     *Usage : Asset::url('https://example.com/hello.css', 'js', array())
     * 
     * @param string $link
     * @param string $type
     * @param array $attr
     */
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

    /**
     * Get Image FIle
     *Usage : Asset::image('Alt', 'Ftot.jpg', array())
     *
     * Locate IMage File drm_frm/public/image/...
     * 
     * @param string $alt
     * @param string $src
     * @param array $attr
     */
    public static function image($alt, $src, $attr = null)
    {
        echo '<img src="' . BASEURL . 'image/' . $src . '" alt="' . $alt . '"' . html::buildTag($attr) . '> ';
    }
    public static function bootstrap($type)
    {
        switch ($type) {
            case 'css':
                echo '
                        <meta charset="UTF-8">
                        <link rel="stylesheet" href="' . BASEURL . 'bootstrap/css/bootstrap.min.css' . '">';
                break;
            case 'js':
                echo '<script src="' . BASEURL . 'js/jquery/jquery.js"></script> 
                        <script src="' . BASEURL . 'js/popperjs/popper.js"></script> 
                        <script src="' . BASEURL . 'bootstrap/js/bootstrap.js"></script>';
                break;
            default:
                errorhandler::notif('Error Bootstrap variable');
                break;
        }
    }
    public static function fontawesomekit()
    {
        echo '<script src="' . FONTKIT . '" crossorigin="anonymous"></script>';
    }
    public static function jquery()
    {
        echo '<script src="' . BASEURL . 'js/jquery/jquery.js"></script>';
    }
    public static function animejs()
    {
        echo '<script src="' . BASEURL . 'animejs/lib/anime.min.js"></script>';
    }
}
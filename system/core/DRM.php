<?php

/**
 * DRM is Mini  Framwork PHP
 *
 * @package    Drm
 * @version    1.0.2
 * @author     Drm Developer
 * @license    MIT License
 * @copyright  2021 Drm TEAM
 */

namespace Drm\Core;

use Drm\Core\classes\errorhandler;
use Drm\Core\ver;

class DRM
{
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];

    public function run()
    {
        $url = $this->parseURL();

        //controller
        if (file_exists(DRM . '/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once DRM . '/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //param z
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        //jalankan method dan controler seerta kirmkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

    public static function version($App)
    {
        if ($App == 'Drm') {
            echo ver::DrmVer('Drm');
        }
        if ($App == 'System') {
            echo ver::DrmVer('System');;
        }
        if ($App == 'Core') {
            echo ver::DrmVer('Core');
        }
        if ($App == 'All') {
            echo ver::DrmVer('Drm');
            echo ver::DrmVer('System');
            echo ver::DrmVer('Core');
        }
    }

    public static function init($config)
    {
        require_once DRM . 'config/' . $config;
    }
};
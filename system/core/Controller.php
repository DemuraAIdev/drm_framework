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


class Controller
{
    public function view($view, $data = [])
    {
        require_once ROOT . LFOLDER . '/' . VFOLDER . '/' . $view . '.php';
    }

    public function model($model)
    {
        require_once DRM . '/models/' . $model . '.php';
        return new $model;
    }
};
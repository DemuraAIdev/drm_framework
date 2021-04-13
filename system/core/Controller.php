<?php

/** For more info about namespaces plase @see http://php.net/manual/en/language.namespaces.importing.php */

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
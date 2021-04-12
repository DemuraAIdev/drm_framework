<?php

require_once DRM . '/config/config.php';

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
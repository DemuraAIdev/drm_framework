<?php

use Drm\Core\Controller;
use Drm\Core\flasher;

class settings extends Controller
{
    public function index()
    {
        $data['judul'] = ' Settings';
        $this->view('templates/header', $data);
        $this->view('set/index', $data);
        $this->view('templates/footer');
    }
}
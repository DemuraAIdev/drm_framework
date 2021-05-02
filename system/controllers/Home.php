<?php

use Drm\Core\Controller;
use Drm\Core\flasher;
use Drm\Core\dates;

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
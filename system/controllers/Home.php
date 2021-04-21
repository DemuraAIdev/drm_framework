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

    public function contoh()
    {
        $data['judul'] = 'contoh';
        $this->view('templates/header', $data);
        $this->view('home/contoh');
        $this->view('templates/footer');
    }

    public function contoh1()
    {
        $data['input'] = $_POST;
        $data['judul'] = 'contoh';
        $this->view('templates/header', $data);
        $this->view('home/contoh1', $data);
        $this->view('templates/footer');
    }
}
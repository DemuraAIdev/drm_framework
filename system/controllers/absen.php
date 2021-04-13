<?php

use Drm\Core\Controller;
use Drm\Core\flasher;

class absen extends Controller
{
    public function index()
    {
        $data['judul'] = ' daftar absen';
        $data['abs'] = $this->model('absen_model')->getAllAbsen();
        $this->view('templates/header', $data);
        $this->view('absen/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = ' detail absen';
        $data['abs'] = $this->model('absen_model')->getAbsenbyid($id);
        $this->view('templates/header', $data);
        $this->view('absen/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('absen_model')->tambahdatauser($_POST) > 0) {
            flasher::setflash('Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/absen');
            exit;
        } else {
            flasher::setflash('gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/absen');
            exit;
        }
    }
}
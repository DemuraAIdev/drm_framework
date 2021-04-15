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
            flasher::setflash('Data user ', 'Berhasil', 'Ditambahkan', 'success');
            header('Location: ' . BASEURL . '/absen');
            exit;
        } else {
            flasher::setflash('Data user ', 'gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/absen');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('absen_model')->hapusdatauser($id) > 0) {
            flasher::setflash('Data user ', 'Berhasil', 'di hapus', 'success');
            header('Location: ' . BASEURL . '/absen');
            exit;
        } else {
            flasher::setflash('Data user ', 'gagal', 'di hapus', 'danger');
            header('Location: ' . BASEURL . '/absen');
            exit;
        }
    }
    public function getubah()
    {
        echo json_encode($this->model('absen_model')->getAbsenbyid($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('absen_model')->ubahdatauser($_POST) > 0) {
            flasher::setflash('Data user ', 'Berhasil', 'Di ubah', 'success');
            header('Location: ' . BASEURL . '/absen');
            exit;
        } else {
            flasher::setflash('Data user ', 'gagal', 'di ubah', 'danger');
            header('Location: ' . BASEURL . '/absen');
            exit;
        }
    }
}
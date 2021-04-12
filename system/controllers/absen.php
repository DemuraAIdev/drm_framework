<?php
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
}
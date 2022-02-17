<?php

class Resepsionis extends Controller {
    public function index() 
    {
        $data['judul'] = 'Data Tamu';
        $data['tamu'] = $this->model('Tamu_model')->getAllTamu();
        $this->view('templates/header', $data);
        $this->view('tamu/index',  $data);
        $this->view('templates/footer');
    }
}
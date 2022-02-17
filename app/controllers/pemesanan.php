<?php

class Pemesanan extends Controller {
    public function tambah()
    {
        if ($this->model('Pemesanan_model')->tambahPemesanan($_POST) > 0) {
            header('Location: '. BASEURL . '/home');
            exit;
        }
    }

}
<?php

class Pemesanan extends Controller {
    public function tambah()
    {
        if ($this->model('Pemesanan_model')->tambahPemesanan($_POST) > 0) {
            Flasher::setFlash('Pesan Kamar ', ' berhasil', 'dibuat', 'success');
            header('Location: '. BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('Pesan Kamar ', ' gagal', 'dibuat', 'danger');
            header('Location: '. BASEURL . '/home');
            exit;
        }
    }
}
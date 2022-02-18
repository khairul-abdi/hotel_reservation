<?php

class Resepsionis extends Controller {
    public function index() 
    {
        $data['judul'] = 'Data Tamu';
        $data['tamu'] = $this->model('Resepsionis_model')->getAllTamu();
        $this->view('templates/header', $data);
        $this->view('resepsionis/index',  $data);
        $this->view('templates/footer');
    }

    public function tambahByResepsionis()
    {
        var_dump("tambahByResepsionis ");
        // if ($this->model('Resepsionis_model')->tambahPemesananByResepsionis($_POST) > 0) {
        //     Flasher::setFlash('Pesan Kamar ', ' berhasil', 'dibuat', 'success');
        //     header('Location: '. BASEURL . '/resepsionis');
        //     exit;
        // } else {
        //     Flasher::setFlash('Pesan Kamar ', ' gagal', 'dibuat', 'danger');
        //     header('Location: '. BASEURL . '/resepsionis');
        //     exit;
        // }

        if ($this->model('Resepsionis_model')->tambahPemesananByResepsionis($_POST) > 0) {
            Flasher::setFlash('Pesan Kamar ', ' berhasil', 'dibuat', 'success');
            header('Location: '. BASEURL . '/resepsionis');
            exit;
        } 
    }

    public function detail($id) 
    {
        $data['judul'] = 'Detail Tamu';
        $data['tamu'] = $this->model('Resepsionis_model')->getTamuById($id);
        $this->view('templates/header', $data);
        $this->view('resepsionis/detail',  $data);
        $this->view('templates/footer');
    }

    public function hapus($id)
    {
        if ($this->model('Resepsionis_model')->hapusPemesanan($id) > 0) {
            Flasher::setFlash('Data Pesanan ', ' berhasil', 'dihapus', 'success');
            header('Location: '. BASEURL . '/resepsionis');
            exit;
        } else {
            Flasher::setFlash('Data Pesanan ', ' gagal', 'dihapus', 'danger');
            header('Location: '. BASEURL . '/resepsionis');
            exit;
        }
    }
}
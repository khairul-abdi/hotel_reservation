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
        if ($this->model('Resepsionis_model')->tambahPemesananByResepsionis($_POST) > 0) {
            Flasher::setFlash('Pesan Kamar ', ' berhasil', 'dibuat', 'success');
            header('Location: '. BASEURL . '/resepsionis');
            exit;
        } else {
            Flasher::setFlash('Pesan Kamar ', ' gagal', 'dibuat', 'danger');
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
    
    public function getubah()
    {
       echo json_encode($this->model('Resepsionis_model')->getTamuById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Resepsionis_model')->ubahPemesananByResepsionis($_POST) > 0) {
            Flasher::setFlash('Data Transaksi ', ' berhasil', 'diubah', 'success');
            header('Location: '. BASEURL . '/resepsionis');
            exit;
        } else {
            Flasher::setFlash('Data Transaksi ', ' gagal', 'diubah', 'danger');
            header('Location: '. BASEURL . '/resepsionis');
            exit;
        }
    }

    public function cari() 
    {
        $data['judul'] = 'Data Tamu';
        $data['tamu'] = $this->model('Resepsionis_model')->cariDataTamu();
        $this->view('templates/header', $data);
        $this->view('resepsionis/index',  $data);
        $this->view('templates/footer');
    }

    public function caribydate() 
    {
        $data['judul'] = 'Data Tamu';
        $data['tamu'] = $this->model('Resepsionis_model')->cariDataTamuByDate();
        $this->view('templates/header', $data);
        $this->view('resepsionis/index',  $data);
        $this->view('templates/footer');
    }
}
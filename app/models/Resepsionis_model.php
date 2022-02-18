<?php

class Resepsionis_model {
    private $table = 'transaksi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahPemesananByResepsionis($data) 
    {   
        $query = "INSERT INTO transaksi VALUES (null, :nama_pemesan, :email, :phone, :nama_tamu, :tipe_fasilitas, :check_in, :check_out, :total_kamar, :status_pemesanan, :created_at, :updated_at)";
        $this->db->query($query);
        $this->db->bind('nama_pemesan', $data['nama-pemesanan']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['no-hp']);
        $this->db->bind('nama_tamu', $data['nama-tamu']);
        $this->db->bind('tipe_fasilitas', $data['tipe-kamar']);
        $this->db->bind('check_in', $this->formatDate($data['check-in']));
        $this->db->bind('check_out', $this->formatDate($data['check-out'])); 
        $this->db->bind('total_kamar', $data['jumlah-kamar']); 
        $this->db->bind('status_pemesanan', $data['status-pemesanan']);
        $this->db->bind('created_at', $this->formatDate(''));
        $this->db->bind('updated_at', $this->formatDate(''));

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function formatDate($dateString)
    {
        if ($dateString == '') {
            $newDate = date("Y-m-d");
        } else {
            $newDate = date("Y-m-d", strtotime($dateString));  
        }
        return $newDate;
    }

    public function getAllTamu() 
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getTamuById($id)
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function hapusPemesanan($id) 
    {
        $query = "DELETE FROM transaksi WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id',$id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahPemesananByResepsionis($data)
    {

        $query = "UPDATE transaksi SET 
                    nama_pemesan = :nama_pemesan,
                    email = :email,
                    phone = :phone,
                    nama_tamu = :nama_tamu,
                    tipe_fasilitas = :tipe_fasilitas,
                    check_in = :check_in,
                    check_out = :check_out,
                    total_kamar = :total_kamar,
                    status_pemesanan = :status_pemesanan,
                    -- created_at = :created_at,
                    updated_at = :updated_at 
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama_pemesan', $data['nama-pemesanan']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['no-hp']);
        $this->db->bind('nama_tamu', $data['nama-tamu']);
        $this->db->bind('tipe_fasilitas', $data['tipe-kamar']);
        $this->db->bind('check_in', $this->formatDate($data['check-in']));
        $this->db->bind('check_out', $this->formatDate($data['check-out'])); 
        $this->db->bind('total_kamar', $data['jumlah-kamar']); 
        $this->db->bind('status_pemesanan', $data['status-pemesanan']);
        // $this->db->bind('created_at', $this->formatDate(date('m-d-Y')));
        $this->db->bind('updated_at', $this->formatDate(''));
        $this->db->bind('id', $data['id']); 

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariDataTamu() 
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM transaksi WHERE nama_tamu LIKE :keyword OR  nama_pemesan LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function cariDataTamuByDate() 
    {
        $keyword = $_POST['keyword'];
        $keyword = $this->formatDate($keyword);
        $query = "SELECT * FROM transaksi WHERE check_in LIKE :keyword OR check_out LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}

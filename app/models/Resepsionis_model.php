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
        $this->db->bind('created_at', $this->formatDate(date('m-d-Y')));
        $this->db->bind('updated_at', $this->formatDate(date('m-d-Y')));

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function formatDate($dateString)
    {
        $newDate = date("Y-m-d", strtotime($dateString));  
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
}

<?php

class Pemesanan_model {
    private $table = 'transaksi';
    private $db;
    private $jumlahKamar = 0;
    private $inputDatepickerCheckIn = "";
    private $inputDatepickerCheckOut = "";

    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahPemesanan($data) 
    {   

        $query = "INSERT INTO transaksi VALUES (null, :nama_pemesan, :email, :phone, :nama_tamu, :tipe_fasilitas, :check_in, :check_out, :total_kamar, :status_pemesanan, :created_at, :updated_at)";
        $this->db->query($query);
        $this->db->bind('nama_pemesan', $data['nama-pemesanan']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['no-hp']);
        $this->db->bind('nama_tamu', $data['nama-tamu']);
        $this->db->bind('tipe_fasilitas', $data['tipe-kamar']);
        $this->db->bind('check_in',  $this->formatDate('')); //MASIH HARDCODE
        $this->db->bind('check_out', $this->formatDate('')); //MASIH HARDCODE
        $this->db->bind('total_kamar', 3); //MASIH HARDCODE
        $this->db->bind('status_pemesanan', 'terima');
        $this->db->bind('created_at', $this->formatDate(''));//MASIH HARDCODE
        $this->db->bind('updated_at', $this->formatDate(''));//MASIH HARDCODE
        var_dump($data);
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
}

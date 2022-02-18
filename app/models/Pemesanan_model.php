<?php

class Pemesanan_model {
    private $table = 'transaksi';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function tambahPemesanan($data) 
    {   
        var_dump("DATA DARU CLIENT => ", $data);
        $query = "INSERT INTO transaksi VALUES (null, :nama_pemesan, :email, :phone, :nama_tamu, :tipe_fasilitas, :check_in, :check_out, :total_kamar, :status_pemesanan, :created_at, :updated_at)";
        $this->db->query($query);
        $this->db->bind('nama_pemesan', $data['nama-pemesanan']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('phone', $data['no-hp']);
        $this->db->bind('nama_tamu', $data['nama-tamu']);
        $this->db->bind('tipe_fasilitas', $data['tipe-kamar']);
        $this->db->bind('check_in', $this->formatDate(date('m-d-Y'))); //MASIH HARDCODE
        $this->db->bind('check_out', $this->formatDate(date('m-d-Y'))); //MASIH HARDCODE
        $this->db->bind('total_kamar', 3); //MASIH HARDCODE
        $this->db->bind('status_pemesanan', 'terima');
        $this->db->bind('created_at', $this->formatDate(date('m-d-Y')));//MASIH HARDCODE
        $this->db->bind('updated_at', $this->formatDate(date('m-d-Y')));//MASIH HARDCODE
        var_dump("DATA DARU QUERY => ", $query);

        var_dump("NILAI ==>  ",$this->db->rowCount());
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function formatDate($dateString)
    {
        $dp = DateTime::createFromFormat("m-d-Y", $dateString);
        $dpstr = $dp->format('Y-m-d');
        return $dpstr;
    }
}

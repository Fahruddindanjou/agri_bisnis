<?php

  class database{

    public $host = "localhost";
    public $uname = "root";
    public $pass = "";
    public $db = "agri_bisnis";

    public $koneksi;

    function __construct()
    {
        $this->koneksi = new mysqli($this->host, $this->uname, $this->pass, $this->db);

        if($this->koneksi->connect_errno){
            echo "Database Tidak Tersedia!!";
            exit;
        }
    }


    public function get_show()
        {
        
            $data = "SELECT * from tbl_menu ORDER BY id ASC";
            $hasil = $this->koneksi->query($data);
            
            while ($d = mysqli_fetch_array($hasil)){
                $result[] = $d;
            }
            return $result;
        }

    public function get_banner()
    {
            $data = "SELECT * from tbl_banner ORDER BY id ASC";
            $hasil = $this->koneksi->query($data);
            
            while ($d = mysqli_fetch_array($hasil)){
                $result[] = $d;
            }
            return $result;
    }

    public function get_berita()
    {
        $data = "SELECT * from detail_main_berita ORDER BY id ASC";
        $hasil = $this->koneksi->query($data);

        while ($d = mysqli_fetch_array($hasil)){
            $result[] = $d;
        }
        return $result;
    }

    public function get_kontak()
    {
        $data = "SELECT * from tbl_kontak ORDER BY id ASC";
        $hasil = $this->koneksi->query($data);

        while ($d = mysqli_fetch_array($hasil)){
            $result[] = $d;
        }
        return $result;
    }
    public function get_produk()
    {
        $data = "SELECT * from produk ORDER BY id ASC";
        $hasil = $this->koneksi->query($data);

        while ($d = mysqli_fetch_array($hasil)){
            $result[] = $d;
        }
        return $result;
    }
    public function get_categori()
    {
        $data = "SELECT * FROM produk_kategori ORDER BY id ASC";
        $hasil = $this->koneksi->query($data);

        while ($d = mysqli_fetch_array($hasil)){
            $result[] = $d;
        }
        return $result;
    }
    public function get_partner()
    {
        $data = "SELECT * FROM tbl_partner ORDER BY id DESC";
        $hasil = $this->koneksi->query($data);

        while ($d = mysqli_fetch_array($hasil)){
            $result[] = $d;
        }
        return $result;
    }
}

?>

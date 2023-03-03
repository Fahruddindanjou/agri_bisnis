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


    public function get_show(){
        
            $data = "SELECT * from tbl_menu ORDER BY id ASC";
            $hasil = $this->koneksi->query($data);
            
            while ($d = mysqli_fetch_array($hasil)){
                $result[] = $d;
            }
            return $result;
        }

}

?>

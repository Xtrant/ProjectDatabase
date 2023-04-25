<?php
class m_daftarPasien
{
    public $hasil = array();
    
    public function setdaftarPasien(
        $namaPasien,
        $umurPasien,
        $keluhanPasien,
    ) {

        require "koneksiMVC.php";
        $rs = $mysqli->query("INSERT INTO 05-daftar_pasien (nama, umur, keluhan) VALUES('$namaPasien', '$umurPasien', '$keluhanPasien')");
    }
    public function getSemuadaftarPasien()
    {
        require "koneksiMVC.php";
        $rs = $mysqli->query("SELECT * FROM 05-daftar_pasien");
        $rows = array();
        while ($row = $rs->fetch_assoc()) {
            $rows[] = $row;
        }
        $this->hasil = $rows;
        return $this->hasil;
    }

    

}
?>
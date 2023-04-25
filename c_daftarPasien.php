<?php
include_once("m_daftarPasien.php");
class c_daftarPasien
{
    public $model;
    public function __construct()
    {
        $this->model = new m_daftarPasien();
    }
    public function tampill()
    {
        $pemweb21 = $this->model->getSemuadaftarPasien();
        include 'v_daftarPasien.php';
    }

// function unsetPOST()
// {
//     if (count($_POST) > 0) {
//         $_POST = array();
//     }
// }
}






?>
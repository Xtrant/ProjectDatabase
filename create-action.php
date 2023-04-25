<?php
include('m_daftarPasien.php');
$model = new m_daftarPasien();
if (isset($_POST['save'])) {
    $model->setdaftarPasien(
        $_POST['nama'],
        $_POST['umur'],
        $_POST['kel']
    );
}
header('location:index.php');
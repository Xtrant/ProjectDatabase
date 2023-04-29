<?php
include('m_daftarPasien.php');
$model = new m_daftarPasien();
if (isset($_POST['daftar'])) {
    $model->setRegister(
        $_POST['user'],
        $_POST['pass'],
        $_POST['fullname'],
        $_POST['gender'],
        $_POST['address'],
    );
}
header('location:login.php');
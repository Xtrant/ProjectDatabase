<?php
include('koneksiMVC.php');
if (isset($_POST['book'])){
    $upd = $mysqli->query("UPDATE `05_login` SET `keluhan` = '$_POST[kel]', `dokter` = '$_POST[dokter]' WHERE `05_login`.`username` = '$_POST[username]'");
}
header("location:index.php");
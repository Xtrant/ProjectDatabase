<?php
include "koneksiMVC.php";
$res = $mysqli->query("SELECT * from 05_login where username= '$_GET[username]'");
$paw21 = mysqli_fetch_array(
    $res
);
if (isset($_GET['username'])){

$rs = $mysqli->query("DELETE dokter FROM 05_login WHERE
username='$_GET[username]'");
}
header("location:detail.php?dokter=$paw21[dokter]");
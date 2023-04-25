<?php
include "koneksiMVC.php";
$rs = $mysqli->query("DELETE FROM 05-daftar_pasien WHERE
id='$_GET[id]'");
header("location:index.php");
<?php
include "koneksiMVC.php";
$rs = $mysqli->query("DELETE FROM daftar_pasien WHERE
id='$_GET[id]'");
header("location:index.php");
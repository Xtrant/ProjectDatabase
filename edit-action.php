<?php
include('koneksiMVC.php');
if (isset($_POST['updt'])) {
    $res = $mysqli->query("UPDATE 05-daftar_pasien SET keluhan = '$_POST[kel]',nama ='$_POST[nama]', umur = '$_POST[umur]' WHERE id = '$_GET[id]'");
    echo "Succesfully Updated";
    
}
header("location:index.php");
<?php
include('koneksiMVC.php');
include('m_daftarPasien.php');
if (isset($_POST['update'])) {
    if (isset($_POST['gender']) != '' ){
    $res = $mysqli->query("UPDATE 05_login SET nama_lengkap = '$_POST[fullname]', jenis_kelamin ='$_POST[gender]', alamat = '$_POST[address]' WHERE username = '$_GET[username]'");
}
    else {
        $res = $mysqli->query("UPDATE 05_login SET nama_lengkap = '$_POST[fullname]', alamat = '$_POST[address]' WHERE username = '$_GET[username]'");
        
    }
    
}
header("location:detail.php?dokter=$_GET[dokter]");
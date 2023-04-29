<?php

if (isset($_GET['dokter'])) {
    include("koneksiMVC.php");
    $kuota = $mysqli->query("SELECT * FROM 05_login WHERE dokter='$_GET[dokter]'"); 
    if ($kuota !='0') {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="wusernameth=device-wusernameth, initial-scale=1.0">
        <title>DETAIL</title>
    </head>

    <body>
        <table cellpadding='10' align='center' border='1'>
            <tbody>
                <h2>DETAIL PASIEN</h2>
                <tr>
                    <td>NO</td>
                    <td>NAMA LENGKAP</td>
                    <td>JENIS KELAMIN</td>
                    <td>ALAMAT</td>
                    <td>KELUHAN</td>

                    <td colspan="2">ACTION</td>
                </tr>

                <?php
                include "koneksiMVC.php";
                $rs = $mysqli->query("SELECT * FROM 05_login WHERE dokter = '$_GET[dokter]'");
                $dataCount = 1;
                while (
                    $paw21 = mysqli_fetch_array(
                        $rs
                    )

                ) {
                    echo
                        "<tr>
                        <td>$dataCount</td>
                        <td>$paw21[nama_lengkap]</td>
                        <td>$paw21[jenis_kelamin]</td>
                        <td>$paw21[alamat]</td>
                        <td>$paw21[keluhan]</td>
                        <div class = 'button1'>
                        <td><a href='edit.php?username=$paw21[username]'>Edit</a></td>
                        </div>
                        <div = 'button2'>
                        <td><a href= 'delete-confirm.php?username=$paw21[username]&no=$dataCount'>Delete</a></td>
                        </div>
                        </tr>"
                    ;

                    ++$dataCount;
                }


                ?>
            </tbody>
        </table>

    </body>

    </html>
    
    <?php
    }
    else {
        header('location:index.php');
    }
} else {
    header('location:index.php');
}
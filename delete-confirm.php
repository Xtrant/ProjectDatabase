<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete</title>
    <style>
        table {
            text-align: center;

        }
        *{
            text-align: center;
            padding, margin: 0px ;
        }

        caption {
            text-transform: uppercase;
            font-weight: bold;

        }

        .mid {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .center, .center2{
            font-size: 25px;
            padding: 5px;
            
        }
        .center :hover {
            background-color: green;
            color: white;
            transition: 0.5s;
        }
        .center2 :hover{
            background-color: red;
            color: white;
            transition: 0.5s;
        }
        .center a, .center2 a{
            text-decoration: none;
            color: black;
            text-transform: capitalize;
        }
    </style>
</head>

<body>
<?php
include('koneksiMVC.php');
$res = $mysqli->query("SELECT * from 05_login where username= '$_GET[username]'");
while ($paw21 = mysqli_fetch_array(
    $res
))
{
echo "<div class='mid'>
<table cellpadding='10' align='center' border='1' textAlign='center'>
    <caption>Yakin mo dihapus?</caption>
    <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Keluhan</th>
    </tr>

    <tr>
        <td>$_GET[no]</td>
        <td>$paw21[nama_lengkap]</td>
        <td>$paw21[jenis_kelamin]</td>
        <td>$paw21[alamat]</td>
        <td>$paw21[keluhan]</td>
    </tr>
    
    
</table>
<h2>Confirm?</h2>
<div class= 'center'>
    <a href='delete.php?username=$_GET[username]'>yes</a>
</div>
<div class= 'center2'>
<a href='detail.php?$paw21[dokter]'>no</a>
</div>



</div>";
}
?>
    
</body>

</html>


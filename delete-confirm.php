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
$res = $mysqli->query("SELECT * from 05-daftar_pasien where id=$_GET[id]");
while ($paw21 = mysqli_fetch_array(
    $res
))
{
echo "<div class='mid'>
<table cellpadding='10' align='center' border='1' textAlign='center'>
    <caption>Yakin mo dihapus?</caption>
    <tr>
        <th>No</th>
        <th>Nama Pasien</th>
        <th>Umur Pasien</th>
        <th>Keluhan Pasien</th>
    </tr>

    <tr>
        <td>$_GET[no]</td>
        <td>$paw21[nama]</td>
        <td>$paw21[umur]</td>
        <td>$paw21[keluhan]</td>
    </tr>
    
    
</table>
<h2>Confirm?</h2>
<div class= 'center'>
    <a href='delete.php?id=$_GET[id]'>yes</a>
</div>
<div class= 'center2'>
<a href='index.php'>no</a>
</div>



</div>";
}
?>
    
</body>

</html>


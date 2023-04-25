<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <style>
        th {
            text-align: left;
        }

        * {
            text-align: center;
        }

        input,
        th {
            font-size: 20px;
        }

        .btn {

            padding: 8px;
            margin-left: 100px;


        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    include "KoneksiMVC.php";
    $mod = $mysqli->query("SELECT * FROM 05-daftar_pasien where id = $_GET[id]");
    while (
        $edit = mysqli_fetch_array(
            $mod)
    ) {
        echo" <h2>Edit Data Pasien</h2>
        <table align='center' cellpadding='7' cellspacing='10'>
            <form action='edit-action.php?id=$_GET[id]' method='post'>
                <tr>
                    <th>Nama</th>
                    <td><input type='text' name='nama' value=$edit[nama] required></td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <td> <input type='number' name='umur' value=$edit[umur] required></td>
                </tr>
                <tr>
                    <th>Keluhan</th>
                    <td><input type='text' name='kel' value=$edit[keluhan] required></td>
                </tr>
                <tr>
                    <th></th>
                    <td class='btn'>
                        <input type='submit' , name='updt' value='Update'>
                    </td>
                </tr>
    
    
    
            </form>";

    }
        ?>
        

</body>

</html>
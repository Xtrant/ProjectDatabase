<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .submit{
            margin-left: 650px;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 20px;
            background-color: aquamarine;
            font-weight: bold;
        }

        textarea {
            font-size: 20px;
        }

    </style>
</head>
<body>
    <?php
    session_start();
    $username = $_GET['username'];
    $dokt = $_GET['dokter'];
    echo "<h2>Isi Secara Lengkap Keluhan di Bawah Ini</h2>
    <form action='daftar-action.php' method='post'>
    <textarea name='kel' cols='100' rows='10' required></textarea><br>
    <input class='submit' type='submit' name='book' value='daftar'>   
    <input type='hidden' name='username' value='$username'>  
    <input type='hidden' name='dokter' value='$dokt'>   
    </form>"

    ?>
    
    
</body>
</html>
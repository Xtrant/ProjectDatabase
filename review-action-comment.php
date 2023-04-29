<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUCCESS</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .center{
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="center">
        <?php
        session_start();
        if (isset($_POST['sv'])) {
            include("koneksiMVC.php");
            $mysqli->query("UPDATE 05_login SET pesan = '$_POST[pesan]' where username = '$_SESSION[username]'");
            echo "<h1>SUCCESS ADD REVIEW</h1>";
        }
        ?>
        <a href="profileee.php">BACK TO HOME</a>
    </div>
</body>

</html>
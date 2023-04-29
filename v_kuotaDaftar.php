<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuota Pendaftaran</title>
    <style>
        .logout {
            padding: 20px;
            text-transform: uppercase;
            color: red;
            text-align: center;
            font-weight: bold;
        }

        .logout :hover {
            color: white;
            background-color: red;
            transition: 0.5s;
        }

        .bold {
            font-weight: bold;
        }
    </style>
</head>

<body>

    
    <h1>Kuota Pendaftaran</h1>
    <table cellpadding='10' align='center' border='1'>
        <tr>
            <td>TANGGAL</td>
            <td>NAMA DOKTER</td>
            <td>KUOTA</td>
            <td>ACTION</td>
        </tr>
        <?php
        include('koneksiMVC.php');
        $resAdiCount = $mysqli->query("SELECT * FROM 05_login WHERE dokter='adi'");
        $countAdi = mysqli_num_rows($resAdiCount);
        $resBudiCount = $mysqli->query("SELECT * FROM 05_login WHERE dokter='budi'");
        $countBudi = mysqli_num_rows($resBudiCount);
        $resCecepCount = $mysqli->query("SELECT * FROM 05_login WHERE dokter='cecep'");
        $countCecep = mysqli_num_rows($resCecepCount);
        $updtKuota = $mysqli->query("UPDATE 05_kuota SET kuota = $countAdi where id=7 ");
        $updtKuota = $mysqli->query("UPDATE 05_kuota SET kuota = $countBudi where id=8 ");
        $updtKuota = $mysqli->query("UPDATE 05_kuota SET kuota = $countCecep where id=9 ");

        $rslt = $mysqli->query("SELECT * from 05_login where username = '$_SESSION[username]' ");
        $user = mysqli_fetch_array(
            $rslt
        );


        $res = $mysqli->query("SELECT * FROM 05_kuota");
        while (
            $kuota = mysqli_fetch_array(
                $res
            )
        ) {
            echo
                "<tr>
            <td>$kuota[tanggal]</td>
            <td>$kuota[nama_dokter]</td>
            <td>$kuota[kuota]/3</td>";
            if ($_SESSION['status'] == 'admin') {
                echo "
                <td> <a href=detail.php?dokter=$kuota[nama_dokter]>Detail</a> </td> 
                ";
            } else {
                if ($kuota['kuota'] < 3) {
                    echo "
            <td><a href= 'daftar.php?dokter=$kuota[nama_dokter]&username=$user[username]'>Daftar</a></td>";
                } else {
                    echo "
                <td class='bold'>FULL</td>";
                }
            }
        }
        ?>


    </table>
    <div class="logout">

        <a href="profileee.php">BACK TO HOME</a>

    </div>

</body>

</html>
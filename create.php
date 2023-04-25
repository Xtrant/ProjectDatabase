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
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <h2>TAMBAH PASIEN</h2>
    <table align="center" cellpadding="7" cellspacing="10">
        <form action="create-action.php" method="post">
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" placeholder="Nama Pasien" required></td>
            </tr>
            <tr>
                <th>Umur</th>
                <td> <input type="number" name="umur" placeholder="Umur Pasien" required></td>
            </tr>
            <tr>
                <th>Keluhan</th>
                <td><input type="text" name="kel" placeholder="Keluhan Pasien" required></td>
            </tr>
            <tr>
                <th></th>
                <td class="btn">
                    <input type="submit", name="save" value="Save">
                </td>
            </tr>



        </form>

    </table>


</body>

</html>

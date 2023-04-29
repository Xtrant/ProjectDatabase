<!DOCTYPE html>
<html>

<head>
    <title>REVIEW</title>
    <style>
        *{
            padding: 0px;
        }
        img {
            cursor: pointer;
            width: 100px;
        }

        ul li {
            display: inline-block;
        }
        button {
            background-color: transparent;
            border: transparent;
        }

        .save {
            background-color: aquamarine;
            font-size: 20px;
            padding: 8px;
            border: 2px solid;
            border-radius: 5px;
            cursor: pointer;
        }
        .center {
            text-align: center;
            margin-top: 100px ;
        }

        .center .kiri{
            position: absolute;
            left: 31%;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    </div>
    <div class="center">
    <?php
    include('koneksiMVC.php');
    session_start();
    if (isset($_SESSION['username'])) {
    if ($_SESSION['status'] == 'admin') { ?>
        <table border='1' cellpadding='10' align='center'>
            <tr>
                <th>Nama</th>
                <th>Comment</th>
                <th>Rate</th>
            </tr>
            <?php
            $res = $mysqli->query("SELECT nama_lengkap, rating, pesan FROM 05_login where stats ='user' and pesan is not null");
            $countRate = $mysqli->query("SELECT ROUND(AVG(rating),2) as average FROM 05_login where stats ='user' and pesan is not null");
            $count = mysqli_fetch_assoc($countRate);
            while ($rating = mysqli_fetch_array($res)) {
                echo ("<tr>
            <td>$rating[nama_lengkap]</td>
            <td>$rating[pesan]</td>
            <td>$rating[rating]</td>
        </tr>");
            }
            echo ("<tr >
       <td colspan='3'> <h3> AVERAGE RATE = $count[average]<h3> </td>
        </tr>
        ");
    } else {

        if (!isset($_SESSION['rate'])) {


            ?>
            </table>
            <ul>
                <form action="review-action-star.php" method="post">
                    <li>
                        <button name="rate" value=1><img id="gambar" src="star.png"></button>
                    </li>

                    <li>
                        <button name="rate" value=2><img id="gambar2" src="star.png"></button>

                    </li>

                    <li>
                        <button name="rate" value=3><img id="gambar3" src="star.png"></button>
                    </li>

                    <li>
                        <button name="rate" value=4><img id="gambar4" src="star.png"></button>
                    </li>

                    <li>
                        <button name="rate" value=5><img id="gambar5" src="star.png"></button>
                    </li>
            </ul>
            </form>


        <?php } else {
            ?>
            <?php
            switch ("$_SESSION[rate]") {
                case 1:
                    ?>
                    <ul>
                        <li><button><img src="star_fill.png" alt="" id="gambar"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar2"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar3"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar4"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar5"></button></li>
                        <li>
                            <h4><a href="clearRate.php">Clear Rate</a></h4>
                        </li>
                    </ul>
                    <?php
                    break;
                case 2:
                    ?>
                    <ul>
                        <li><button><img src="star_fill.png" alt="" id="gambar"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar2"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar3"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar4"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar5"></button></li>
                        <li>
                            <h4><a href="clearRate.php">Clear Rate</a></h4>
                        </li>
                    </ul>
                    <?php
                    break;
                case 3:
                    ?>
                    <ul>
                        <li><button><img src="star_fill.png" alt="" id="gambar"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar2"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar3"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar4"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar5"></button></li>
                        <li>
                            <h4><a href="clearRate.php">Clear Rate</a></h4>
                        </li>
                    </ul>
                    <?php
                    break;
                case 4:
                    ?>
                    <ul>
                        <li><button><img src="star_fill.png" alt="" id="gambar"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar2"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar3"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar4"></button></li>
                        <li><button><img src="star.png" alt="" id="gambar5"></button></li>
                        <li>
                            <h4><a href="clearRate.php">Clear Rate</a></h4>
                        </li>
                    </ul>
                    <?php
                    break;
                case 5:
                    ?>
                    <ul>
                        <li><button><img src="star_fill.png" alt="" id="gambar"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar2"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar3"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar4"></button></li>
                        <li><button><img src="star_fill.png" alt="" id="gambar5"></button></li>
                        <li>
                            <h4><a href="clearRate.php">Clear Rate</a></h4>
                        </li>
                    </ul>
                    <?php
                    break;

                default:

                    break;
            }


        } ?>



        <form action="review-action-comment.php" method="post">
            <label class="kiri" for="">Add a Comment</label><br>
            <textarea name="pesan" id="pesan" cols="80" rows="10" required></textarea><br>

            <button type="submit" name="sv" id="save"><div class="save">Save</div></button>
        </form>

    <?php }}
    else{
        header('location:login.php');
    }
    ?>





    <script>
        function gantiGambar(value) {
            var gambar = document.getElementById("gambar");
            var gambar2 = document.getElementById("gambar2");
            var gambar3 = document.getElementById("gambar3");
            var gambar4 = document.getElementById("gambar4");
            var gambar5 = document.getElementById("gambar5");
            switch (value) {
                case 1:
                    gambar.src = "star_fill.png";
                    gambar2.src = "star.png";
                    gambar3.src = "star.png";
                    gambar4.src = "star.png";
                    gambar5.src = "star.png";
                    break;
                case 2:
                    gambar.src = "star_fill.png";
                    gambar2.src = "star_fill.png";
                    gambar3.src = "star.png";
                    gambar4.src = "star.png";
                    gambar5.src = "star.png";
                    break;
                case 3:
                    gambar.src = "star_fill.png";
                    gambar2.src = "star_fill.png";
                    gambar3.src = "star_fill.png";
                    gambar4.src = "star.png";
                    gambar5.src = "star.png";
                    document.cookie = "value = value ;expires=Thu, 28 Apr 2024 12:00:00 UTC; path=/";
                    break;
                case 4:
                    gambar.src = "star_fill.png";
                    gambar2.src = "star_fill.png";
                    gambar3.src = "star_fill.png";
                    gambar4.src = "star_fill.png";
                    gambar5.src = "star.png";
                    break;
                case 5:
                    gambar.src = "star_fill.png";
                    gambar2.src = "star_fill.png";
                    gambar3.src = "star_fill.png";
                    gambar4.src = "star_fill.png";
                    gambar5.src = "star_fill.png";
                    break;

                default:
                    break;
            }


        }

        function validasiForm() {
            var inputSave = document.getElementById("save").value;
            var inputPesan = document.getElementById("pesan").value;

            if (inputPesan != "") {
                return true;
            }
        }



    </script>



</div>
</body>

</html>
<?php
session_start();
include('koneksiMVC.php');
if (isset($_POST['username'])) {
    $lgn = $mysqli->query("SELECT * FROM 05_login where username='$_POST[username]'");
    $res = mysqli_fetch_array($lgn);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($res !== null) {

        if ($username == $res['username'] && $password == $res['pass']) {
            $status = $res['stats'];

            $_SESSION['username'] = $username;
            $_SESSION['status'] = $status;
            header('location:profileee.php');
        }
        else {
            echo "username kamu udah benar cuma password nya salah";
        }
    } else {
        echo"wrong username or password";
    }
} else {
    header('location:profileee.php');
}
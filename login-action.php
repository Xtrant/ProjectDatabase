<?php
session_start();
include('koneksiMVC.php');
if (isset($_POST['username'])) {
    $lgn = $mysqli->query("SELECT * FROM login where username='$_POST[username]'");
    $res = mysqli_fetch_array($lgn);
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($res !== null) {

        if ($username == $res['username'] && $password == $res['password']) {
            $status = $res['status'];


            $_SESSION['status'] = $status;
            header('location:index.php');
        }
        else {
            echo "username kamu udah benar cuma password nya salah";
        }
    } else {
        echo"wrong username or password";
    }
} else {
    echo "loginnn dlu jancooook";
}
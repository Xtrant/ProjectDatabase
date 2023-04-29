<?php
session_start();
include('koneksiMVC.php');
$mysqli->query("UPDATE 05_login SET rating = $_POST[rate] where username = '$_SESSION[username]'");
$_SESSION['rate'] = $_POST['rate'];
header("location:review.php");
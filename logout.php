<?php
session_start();

session_destroy();
echo "success log out";
header('location:profileee.php');
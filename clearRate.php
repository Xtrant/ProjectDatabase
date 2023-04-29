<?php
session_start();
if (isset($_SESSION['rate'])){
    unset($_SESSION['rate']);

}
else echo "thanks god";

header('location:review.php');

<?php
include_once("c_daftarPasien.php");
$controller = new c_daftarPasien();
$controller->invoke();
$controller->unsetPOST();
?>
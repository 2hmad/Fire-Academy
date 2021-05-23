<?php
$host = "localhost";
//$user = "id14515899_fire_academy_db";
//$pass = "FireAcademy123@";
//$db = "id14515899_fire_academy";
$user = "root";
$pass = "";
$db = "fire_academy";
$connect = mysqli_connect($host, $user, $pass, $db) or die("هناك مشكلة في قاعدة البيانات");
ob_start();
?>
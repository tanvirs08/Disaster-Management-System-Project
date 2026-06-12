<?php
$host = "mysql-1b2ebb4b-disastermanagementsystem.e.aivencloud.com";
$user = "avnadmin";
$password = "AVNS_KQFNY3l5dtW9lbtLH2G";
$database = "defaultdb";
$port = "15070";

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>

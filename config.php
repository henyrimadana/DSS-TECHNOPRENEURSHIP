<?php
$servername = "localhost";
$username = "root";
$database = "metodesaw";
$password = "";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
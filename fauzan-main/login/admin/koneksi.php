<?php
$databaseHost = "localhost";
$databaseName = "login";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if($mysqli) {
    echo "Koneksi db berhasil";
} else {
    echo "Koneksi db gagal";
}
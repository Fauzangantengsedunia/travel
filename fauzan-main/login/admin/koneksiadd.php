<?php
require 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$query_sql = "INSERT INTO akun (username, password, level)
VALUES ('$username', '$password', '$level')";


if(mysqli_query($mysqli, $query_sql)) {
    header("location:index.php");
} else {
    echo "Pendaftaran Gagal : " . mysqli_error($mysqli);
}
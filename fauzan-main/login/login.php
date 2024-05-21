<?php
// mengaktifkan session pada php 
session_start();
include 'koneksi.php'; 

$username = $_POST['Username']; 
$password = $_POST['Password'];

$login = mysqli_query($mysqli,"select * from akun where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){

     $data = mysqli_fetch_assoc($login);
     // cek jika user login sebagai admin 
     if($data['level']=="admin"){
        

         //buat session login dan usernama 
         $_SESSION['username'] = $username;
         $_SESSION['level'] = "admin";
         // alihkan ke halaman disboard admin 
         header("location:admin/index.php");

         //cek jika user login sebagai user
     }else if($data['level']=="user"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        header("location:user/index.html");

    
     }
     else{

        header("location:login/login.html");
     }
    }else{
        header("location:login.html?pesan=gagal");
}
?>
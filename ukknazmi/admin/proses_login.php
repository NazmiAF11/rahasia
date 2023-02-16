<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat','root');
$query = $koneksi->query("SELECT * FROM `petugas` WHERE username='$username'AND password='$password'");
$data = $query->fetch();
if ($data) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
  header("location:index.php");
}else{
    header("location:admin.php");
}
<?php
session_start();
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$telp = $_POST['telp'];
$koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat','root');
$query = $koneksi->query("SELECT * FROM `masyarakat` WHERE nik='$nik', nama='$nama',username='$username','password='$password',telp='$telp'");
$data = $query->fetch();
if ($data) {
    $_SESSION['nik'] = $nik;
    $_SESSION['nama'] = $nama;
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['telp'] = $telp;
    header("location:beranda.php");
}else{
    header("location:login.php");
}
<?php
include("koneksi.php");

$nik  = $_REQUEST['nik'];
$username =  $_REQUEST['username'];
$password =  $_REQUEST['password'];

$koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat', 'root', '');
$query = $koneksi->query("INSERT INTO `masyarakat` VALUES('$nik','$username','password')");
$data = $query->fetch();

header("location:login.php");
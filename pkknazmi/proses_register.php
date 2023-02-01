<?php
include("koneksi.php");

$nik  = $_REQUEST['nik'];
$nama =  $_REQUEST['nama'];

$koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat', 'root', '');
$query = $koneksi->query("INSERT INTO `masyarakat` VALUES('$nik','$nama')");
$data = $query->fetch();

header("location:login.php");
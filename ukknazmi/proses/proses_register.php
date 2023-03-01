<?php

$nik =  $_REQUEST['nik'];
$nama =  $_REQUEST['nama'];
$username =  $_REQUEST['username'];
$password = $_REQUEST['password'];
$telp =  $_REQUEST['telp'];
$level = $_REQUEST['level'];

$koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat', 'root', '');

$query = $koneksi->query("INSERT INTO `masyarakat` VALUES('$nik','$nama','$username','$password','$telp','$level')");
$data = $query->fetch();

header("location:../login.php");
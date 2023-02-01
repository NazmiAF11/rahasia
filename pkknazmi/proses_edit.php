<?php

include "function/koneksi.php";

$id = $_GET['id'];

$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$lokasi = $_POST['lokasi'];
$suhu = $_POST['suhu_tubuh'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = $koneksi->query("UPDATE pengaduan SET `tanggal`='$tanggal',`waktu`='$waktu',`lokasi`='$lokasi',`suhu_tubuh`='$suhu' WHERE id='$id'");
$data = $query->fetch();

if ($query) {
    header("location:catatan.php");
}
<?php
session_start();
include "function/koneksi.php";

$tanggal = $_POST['tgl_pengaduan'];

$isi_laporan = $_POST['isi_laporan'];
$foto = $_FILES['foto']['name'];
$status = 'proses';
$nik = '123321';
$id =

    // $koneksi = new PDO('mysql:host=localhost;dbname=pengaduan_masyarakat', 'root', '');
$query = $koneksi->query("INSERT INTO pengaduan VALUES ('$id','$tanggal','$nik','$isi_laporan','$foto','$status')");
header("location:masyarakat/home.php");
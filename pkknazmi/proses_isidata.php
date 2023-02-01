<?php
include "function/koneksi.php";
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$isi_laporan = $_POST['isilaporan'];
$status = $_POST['status'];



$query = $koneksi->query("INSERT INTO pengaduan VALUES (null,'$id','$tanggal','$isilaporan','$status')");
$data = $query->fetch();
header("location:catatan.php");
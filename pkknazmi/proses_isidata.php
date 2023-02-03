<?php
include "function/koneksi.php";
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$isi_laporan = $_POST['isi'];
$status = $_POST['status'];
$query = $koneksi->query("INSERT INTO pengaduan VALUES (null,'$id','$tanggal','$isi_laporan','$status')");
$data = $query->fetch();
header("location:catatan.php");
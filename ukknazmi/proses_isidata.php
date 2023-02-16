<?php
include "function/koneksi.php";
$id = $_POST['id_pengaduan'];
$tanggal = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi_laporan = $_POST['isi_laporan'];
$foto = $_POST['foto'];
$status = $_POST['status'];
$query = $koneksi->query("INSERT INTO pengaduan VALUES ('$id','$tanggal','$nik','$isi_laporan','$foto','$status')");
header("location:masyarakat.php");

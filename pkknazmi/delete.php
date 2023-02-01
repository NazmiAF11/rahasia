<?php
include "koneksi.php";

$id = $_GET['id'];

$koneksi = new PDO("mysql:host =localhost;dbname=pengaduan_masyarakat",'root','');
$query = $koneksi->query("DELETE FROM Tulis_pengaduan WHERE id='$id'");

if($query){
    header("location:catatan.php");
}
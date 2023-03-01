<?php
include "function/koneksi.php";

$id = $_GET['id_pengaduan'];

$koneksi = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat",'root','');
$query = $koneksi->query("DELETE FROM pengaduan WHERE id_pengaduan='$id'");

if($query){
    header("location:masyarakat/home.php");
}
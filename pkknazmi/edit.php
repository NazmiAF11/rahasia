<?php
session_start();
$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=peduli_diri", 'root', '');
$query = $db->query("SELECT * FROM catatan_perjalanan where id = $id ");
$data = $query->fetch();
//cek apakah session ada atau tidak
if (isset($_SESSION['nama'])) {
    header("location:login.php");
}
?>
<style>
    body {
        background-image: url();
        background-size: cover;

    }
</style>
<title>Peduli Diri - Edit Data</title>
<html>

<body>
    <div class="Kotak_isi">
        <table border="1" align="center" width="50%" height="40%">
            <form action="prosesedit.php?id=<?= $data['id'] ?>" method="POST">
                <td>
                    <table align="center">
                        <tr>
                            <td>Tanggal</td>
                            <td><input type="date" name="tanggal" required></td>
                        </tr>
                        <tr>
                            <td>waktu</td>
                            <td><input type="time" name="waktu" required></td>
                        </tr>
                        <tr>
                            <td>Lokasi Yang Di Kunjungi</td>
                            <td><input type="text" name="lokasi" required></td>
                        </tr>
                        <tr>
                            <td>Suhu Tubuh</td>
                            <td><input type="text" name="suhu_tubuh" required></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td align="right"><input type="submit" name="simpan" value="simpan"></td>
                        </tr>
                    </table>


            </form>
            </td>
        </table>
</body>

</html>
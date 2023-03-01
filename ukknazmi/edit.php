<?php
session_start();
$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');
$query = $db->query("SELECT * FROM pengaduan ");
$data = $query->fetch();
//cek apakah session ada atau tidak
// if (isset($_SESSION['nama'])) {
//     header("location:login.php");
// }
?>
<style>
    body {
        background-image: url();
        background-size: cover;

    }
</style>
<title>Pengaduan Masyarakat - Edit Data</title>
<html>

<body>
    <div class="Kotak_isi">
        <table border="1" align="center" width="50%" height="40%">
            <form action="proses_edit.php?id_pengaduan=<?= $_GET['id_pengaduan'] ?>" method="POST">
                <td>
                    <table align="center">

                        <tr>
                            <td>tanggal</td>
                            <td><input type="date" name="tgl_pengaduan" required></td>
                        </tr>

                        <tr>
                            <td>isi laporan</td>
                            <td><input type="text" name="isi_laporan" required></td>
                        </tr>
                        <tr>
                            <td>foto</td>
                            <td>
                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label"></label>
                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                            <td align="right">
                                <div class="text-end">

                                    <button class="btn btn-primary">Simpan</button>
                                    </a>
                                </div>
                            </td>
                </td>

                </tr>

        </table>

        </form>
        </td>
        </table>
</body>

</html>
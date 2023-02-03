<?php
include "header.php";
$db = new PDO("mysql:host=localhost;dbname=pengaduan_masyarakat", 'root', '');

$query = $db->query("SELECT * FROM pengaduan");
?>
<!DOCTYPE html>
<html lang="en">
<style>
    body {
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSApMCBAD53GwUf5tkWlbK8l7VjrZrEDyiwzw&usqp=CAU")
    }
</style>

<body>


    <head>

        <title>Pengaduan Masyarakat - Isi Laporan Pengaduan</title>
    </head>


    <table border="1" align="center" width="90%" height="50%">
        <td>
            <table align="center" border="2" width="90%" hieght="90%">
                <tr>
                    <th>id</th>
                    <th>tanggal</th>
                    <th>isi laporan</th>
                    <th>status</th>
                   

                </tr>

                <?php while ($data = $query->fetch()) : ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><?= $data['tanggal'] ?></td>
                        <td><?= $data['isi laporan'] ?></td>
                        <td><?= $data['status'] ?></td>
                        <td>
                            <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-info mb-3">Update</a>
                            <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-info mb-3">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>

</body>

</html>
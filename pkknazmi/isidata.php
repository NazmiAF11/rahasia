<?php
include "function/koneksi.php";

?>
<html>

<body>


    <table border="align"="center" width="100%" height="20%">
        <form action="prosesisidata.php" method="POST">
            <td>
                <table align="center">
                <tr>
                        <td>id</td>
                        <td><input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td><input type="date" name="tanggal"></td>
                    </tr>
                   
                    <tr>
                        <td>Isi_Laporan </td>
                        <td><input type="text" name="isilaporan"></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td><input type="text" name="status"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="right">
                            <div class="text-end">

                                <button class="btn btn-primary">Simpan</button>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </form>
    </table>

</body>

</html>
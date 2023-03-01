<?php
include "function/koneksi.php";

?>
<html>

<body>


    <table border="1" align="center" width="50%" height="40%">
        <form action="proses_isidata.php" method="POST" enctype='multipart/form-data'>
            <td>
                <table align="center">

                    <tr>
                        <td>tanggal</td>
                        <td><input type="date" name="tgl_pengaduan"></td>
                    </tr>
                    <tr>
                        <td>Nik</td>
                        <td><input type="number" name="nik"></td>
                    </tr>

                    <tr>
                        <td>Isi Laporan</td>
                        <td><input type="text" name="isi_laporan"></td>
                    </tr>
                    <tr>
                        <td>foto</td>
                        <td>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label"></label>
                                <input type="file" name="foto" class="form-control">
                            </div>
                        </td>
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
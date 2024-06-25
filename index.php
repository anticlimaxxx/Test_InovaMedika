<?php
// buat koneksi database dengan connect file
include("connect.php");
// fetch semua data data dari database
$hasil = mysqli_query($connection, "SELECT * FROM datapengguna ORDER by id DESC");
?>
<html>
    <head>
        <title>Data-Data Rumah Sakit Inova Medika</title>
    </head>
    <body>
        <div style="
        margin-top: 10px;
        margin-bottom: 10px;
        border: 2px solid black;
        width: 30%;
        text-align: center;
        color: black;
        padding: 5px;
        float: right;">
            <a href="tambahdata.php" style="text-decoration: none; color: black;">
                Tambah Data Pengguna
            </a>
        </div>
        <table style="width: 100%;" border="1">
            <thead>
                <tr>
                    <th>Wilayah</th>
                    <th>Pasien</th>
                    <th>Pegawai</th>
                    <th>Tindakan</th>
                    <th>Obat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($datapengguna = mysqli_fetch_array($hasil))
                {
                    echo "<tr>";
                    echo "<td>".$datapengguna['wilayah']."</td>";
                    echo "<td>".$datapengguna['pasien']."</td>";
                    echo "<td>".$datapengguna['pegawai']."</td>";
                    echo "<td>".$datapengguna['tindakan']."</td>";
                    echo "<td>".$datapengguna['obat']."</td>";
                    echo "<td>
                    <a href='edit.php?id=$datapengguna[id]'>Edit</a> | <a href='delete.php?id=$datapengguna[id]'>Delete</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </body>
</html>
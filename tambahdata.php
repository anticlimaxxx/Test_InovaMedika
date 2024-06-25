<html>
    <head>
        <title>Tambahkan Data Pengguna</title>
    </head>
<body>
        <h2>
            Tambah Daftar Pengguna
        </h2>
        <form action="tambahdata.php" method="post" name="form1">
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Wilayah :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="wilayah">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Pasien :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="pasien">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Pegawai :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="pegawai">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Tindakan :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="tindakan">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Obat :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="obat">
            </div>
            <div>
                <input type="submit" name="Submit" style="background: blue; border-radius: 5px; padding: 5px; border: 2px solid blue; color: white;" value="Tambahkan">
                <a href='index.php' style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none;">Cancel</a>
            </div>
        </form>
        <?php
        // Chek apalah form sudah tersubmit, insert data dari tabel datapengguna
        if(isset($_POST['Submit']))
        {
            $wilayah = $_POST['wilayah'];
            $pasien = $_POST['pasien'];
            $pegawai = $_POST['pegawai'];
            $tindakan = $_POST['tindakan'];
            $obat = $_POST['obat'];
// Masukan file koneksi database
            include("connect.php");
// insert data pengguna ke tabel
            $hasil = mysqli_query($connection, "INSERT INTO datapengguna (wilayah,pasien,pegawai,tindakan,obat) VALUES('$wilayah', '$pasien', '$pegawai', '$tindakan', '$obat') ");
// menampilkan pesan ketika berhasil di tambahkan
            echo "Data Pengguna Berhasil Ditambahkan. <a href='index.php'>Data Pengguna</a>";
        }
        ?>
    </body>
</html>
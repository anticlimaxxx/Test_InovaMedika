<?php
// masukan file koneksi database
include("connect.php");
// cek jika apakah form dikirimkan untuk update data, lalu arahkan ke index setelah berhasil di update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $wilayah = $_POST['wilayah'];
    $pasien = $_POST['pasien'];
    $pegawai = $_POST['pegawai'];
    $tindakan = $_POST['tindakan'];
    $obat = $_POST['obat'];
// update data pengguna
    $hasil = mysqli_query($connection, "UPDATE datapengguna SET wilayah='$wilayah', pasien='$pasien', pegawai='$pegawai', tindakan='$tindakan', obat='$obat' WHERE id=$id");
    // lakukan redirect ke index untuk melihat hasil dari update data
    header("Location: index.php");
}
?>
<?php
// GET id dari url
$id = $_GET['id'];
// Fetch data pengguna berdasarkan id
$hasil = mysqli_query($connection, "SELECT * FROM
 datapengguna WHERE id=$id");
while($data = mysqli_fetch_array($hasil))
 {
     $wilayah = $data['wilayah'];
     $pasien = $data['pasien'];
     $pegawai = $data['pegawai'];
     $tindakan = $data['tindakan'];
     $obat = $data['obat'];
 }
?>
<html>
    <head>
        <title>Edit</title>
    </head>
    <body>
        <h2>
            Edit Data Pengguna
        </h2>
        <form method="post" action="edit.php" name="formupload">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Wilayah :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="wilayah" value="<?php echo $wilayah; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Pasien :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="pasien" value="<?php echo $pasien; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Pegawai :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="pegawai" value="<?php echo $pegawai; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Tindakan :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="tindakan" value="<?php echo $tindakan; ?>">
            </div>
            <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
                <div style="margin-bottom: 5px;">
                    <label>
                        Obat :
                    </label>
                </div>
                <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="obat" value="<?php echo $obat; ?>">
            </div>
            <div>
                <input type="submit" name="update" style="background: blue; border-radius: 5px; padding: 5px; border: 2px solid blue; color: white;" value="Edit">
                <a href='index.php' style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none;">Cancel</a>
            </div>
        </form>
    </body>
</html>
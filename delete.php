<?php
// masukan file database koneksi
include("connect.php");
// Ambil id dari url untuk mendelet data pengguna
$id = $_GET['id'];
// Delete baris data pengguna dari table berdasarkan id
$hasil = mysqli_query($connection, "DELETE FROM datapengguna WHERE id=$id");
// Setelah menghapus redirect kembali ke index untuk melihat hasilnya
header("Location:index.php");
?>
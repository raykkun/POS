<?php 
include 'koneksi.php';
$id = $_POST['nom'];
$nama = $_POST['nama'];
$jumlah = $_POST["jumlah_terjual"];
$harga = $_POST["harga_penjualan"];

mysqli_query($conn, "UPDATE gudang SET nama=\"$nama\", jumlah_terjual=\"$jumlah\", harga_penjualan=\"$harga\" WHERE nom='$id'");
header("location:index.php?pesan=update");
?>

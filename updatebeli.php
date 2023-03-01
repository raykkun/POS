<?php 
include 'koneksi.php';
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];

mysqli_query($conn, "UPDATE barang_beli SET tanggal='$tanggal', nama='$nama', jumlah='$jumlah', harga='$harga' WHERE id='$id'");

header("location:index.php?pesan=update");
?>

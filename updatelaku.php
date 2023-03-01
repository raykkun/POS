<?php 
include 'koneksi.php';
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total_harga =$_POST['total_harga'];
$laba = $_POST['laba'];

mysqli_query($conn, "UPDATE barang_laku SET tanggal='$tanggal', nama='$nama', jumlah='$jumlah', harga='$harga', total_harga='$total_harga', laba='$laba' WHERE id='$id'");

header("location:index.php?pesan=update");
?>

<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$jumlah = $_POST["jumlah_terjual"];
$harga = $_POST["harga_penjualan"];

mysqli_query($conn, "INSERT INTO gudang VALUES(0,'$nama','$jumlah','$harga')");
header("location:index.php?pesan=input");
?>

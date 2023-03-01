<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$suplier = $_POST['suplier'];
$modal =$_POST['modal'];
$harga = $_POST['harga'];
$jumlah = $_POST["jumlah"];

mysqli_query($conn, "INSERT INTO barang VALUES(0,\"$nama\",\"$jenis\",\"$suplier\",'$modal','$harga','$jumlah')");
header("location:index.php?pesan=input");
?>

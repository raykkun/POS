<?php 
include 'koneksi.php';
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];

$dt=mysqli_query($conn, "SELECT * FROM barang where nama='$nama'");
$data=mysqli_fetch_array($dt);

	$totalHarga = $jumlah * $harga;
	
	$formatDiskon = ($diskon / 100) * $totalHarga;

	$totalSetelahDiskon = $totalHarga - $formatDiskon;

	$sisa=$data['jumlah'] + $jumlah;
	mysqli_query($conn, "UPDATE barang set jumlah='$sisa' where nama='$nama'");

	mysqli_query($conn, "INSERT INTO barang_beli VALUES(0,'$tanggal','$nama','$jumlah','$harga','$formatDiskon','$totalSetelahDiskon')");
	header("location:index.php?pesan=input");
?>

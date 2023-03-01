<?php 
include 'koneksi.php';
$tanggal = $_POST['tanggal'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];


$dt=mysqli_query($conn, "SELECT * FROM barang where nama='$nama'");
$data=mysqli_fetch_array($dt);
if ($data['jumlah'] >= $jumlah){
	$sisa=$data['jumlah'] - $jumlah;
	mysqli_query($conn, "update barang set jumlah='$sisa' where nama='$nama'");

	$modal=$data['modal'];
	$laba=$harga-$modal;
	$labaa=$laba*$jumlah;
	$formatDiskon = ($harga*$jumlah) * ($diskon/100);

	$total_harga=($harga*$jumlah)-$formatDiskon;

	mysqli_query($conn, "INSERT INTO barang_laku VALUES(0,'$tanggal','$nama','$jumlah','$harga','$total_harga','$labaa','$formatDiskon')");
	header("location:index.php?pesan=input");
} else{
	echo "Stok Tidak Cukup";
}

?>

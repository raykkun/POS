<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM barang_beli WHERE id='$id'")or die(mysql_error());

header("location:index.php?pesan=hapus");
?>

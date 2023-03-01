<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM barang_laku WHERE id='$id'")or die(mysqli_error($conn));

header("location:index.php?pesan=hapus");
?>

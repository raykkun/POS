<?php 
include 'koneksi.php';
$id = $_GET['nom'];
mysqli_query($conn, "DELETE FROM gudang WHERE nom='$id'")or die(mysqli_error($conn));

header("location:index.php?pesan=hapus");
?>

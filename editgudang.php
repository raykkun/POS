<html>
<head>
	<title>-- Edit Pendataan Barang --</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>-- Toko Kita --</h1>
		<h3>Sistem Pergudangan Barang</h3>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit Barang</h3>

	<?php 
	include "koneksi.php";

	$x = $_GET['nom'];
	$query_mysql = mysqli_query($conn, "SELECT * FROM gudang WHERE nom='$x'")or die(mysqli_error($conn));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="updategudang.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="hidden" name="nom" value="<?php echo $data['nom'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>		
			<tr>
			        <td><p>Jumlah Terjual</td>
			        <td>:</td>
			        <td><input name = "jumlah_terjual" type = "text" value="<?php echo $data['jumlah_terjual'] ?>"><br></td>
            </tr> 
            <tr>
			        <td><p>Harga Penjualan</td>
			        <td>:</td>
			        <td><input name = "harga_penjualan" type = "text" value="<?php echo $data['harga_penjualan'] ?>"><br></td>
			</tr> 
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>

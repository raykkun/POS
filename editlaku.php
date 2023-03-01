<html>
<head>
	<title>-- Pendataan Barang --</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>-- Toko Kita --</h1>
		<h3>Sistem Penjualan Barang</h3>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit Barang</h3>

	<?php 
	include "koneksi.php";

	$id = $_GET['id'];
	$query_mysql = mysqli_query($conn, "SELECT * FROM barang_laku WHERE id='$id'")or die(mysqli_error($conn));
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="updatelaku.php" method="post">		
		<table>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="date" name="tanggal" value="<?php echo $data['tanggal'] ?>">
				</td>					
			</tr>		
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td>
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>
			<tr>
		        <td><p>Jumlah</td>
		        <td>:</td>
		        <td><input name = "jumlah" type = number value="<?php echo $data['jumlah'] ?>"><br></td>
			</tr> 
			<tr>
			        <td><p>Harga</td>
			        <td>:</td>
			        <td><input name = "harga" type = number value="<?php echo $data['harga'] ?>"><br></td>
			</tr> 
			<tr>
			        <td><p>Total Harga</td>
			        <td>:</td>
			        <td><input name = "total_harga" type = number value="<?php echo $data['total_harga'] ?>"><br></td>
			</tr> 
			<tr>
			        <td><p>Laba</td>
			        <td>:</td>
			        <td><input name = "laba" type = number value="<?php echo $data['laba'] ?>" readonly="true"><br></td>
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

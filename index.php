<html>
<head>
	<title>-- Pendataan Barang --</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.js"></script>
</head>
<body>
	<div class="judul">		
		<h1>-- Toko Kita --</h1>
		<h3>Sistem Penjualan Barang</h3>
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>

	<br><br><a class="tombol" href="inputbeli.php">+ Tambah Pembelian</a>
	<h3>Data Pembelian</h3>

	<a style="margin-bottom:10px" href="lap_barang_beli.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>

	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Diskon</th>
			<th>Total Harga</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($conn, "SELECT * FROM barang_beli ORDER BY id DESC")or die(mysqli_error($conn));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
			<td><?php echo number_format($data['harga']); ?></td>
			<td><?php echo number_format($data['diskon']); ?></td>
			<td><?php echo number_format($data['total']); ?></td>
			<td>
				<a href="editbeli.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapusbeli.php?id=<?php echo $data['id']; ?>" onClick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>			
			</td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<a class="tombol" href="input.php">+ Tambah Barang</a>
	<h3>Data Barang</h3>

	<a style="margin-bottom:10px" href="lap_barang.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
	
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis</th>
			<th>Supplier</th>
			<th>Modal</th>
			<th>Harga Jual</th>
			<th>Jumlah</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($conn, "SELECT * FROM barang ORDER BY id DESC")or die(mysqli_error($conn));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jenis']; ?></td>
			<td><?php echo $data['suplier']; ?></td>
			<td><?php echo $data['modal']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus.php?id=<?php echo $data['id']; ?>" onClick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>			
			</td>
		</tr>
		<?php } ?>
	</table>
	<br><br><a class="tombol" href="inputlaku.php">+ Tambah Penjualan</a>
	<h3>Data Penjualan</h3>

	<a style="margin-bottom:10px" href="lap_barang_jual.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
	
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Total Harga</th>
			<th>Laba</th>
			<th>Diskon</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($conn, "SELECT * FROM barang_laku ORDER BY id DESC")or die(mysqli_error($conn));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['tanggal']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td><?php echo $data['total_harga']; ?></td>
			<td><?php echo $data['laba']; ?></td>
			<td><?php echo $data['diskon']; ?></td>
			<td>
				<a href="editlaku.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapuslaku.php?id=<?php echo $data['id']; ?>" onClick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>			
			</td>
		</tr>
		<?php } ?>
	</table>


	<br><br><a class="tombol" href="inputgudang.php">+ Tambah Gudang</a>
	<h3>Data Gudang</h3>

	<a style="margin-bottom:10px" href="lap_gudang.php" target="_blank" class="btn btn-default pull-right"><span class='glyphicon glyphicon-print'></span>  Cetak</a>
	
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jumlah Terjual</th>
			<th>Harga Penjualan</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysqli_query($conn, "SELECT * FROM gudang ORDER BY nom DESC")or die(mysqli_error($conn));
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jumlah_terjual']; ?></td>
			<td><?php echo $data['harga_penjualan']; ?></td>
			<td>
				<a href="editgudang.php?nom=<?php echo $data['nom']; ?>">Edit</a> |
				<a href="hapusgudang.php?nom=<?php echo $data['nom']; ?>" onClick="return confirm('Anda Yakin Akan Menghapus')">Hapus</a>			
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>

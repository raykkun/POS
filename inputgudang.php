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
<h3>Input Barang Gudang</h3>

<form action="simpangudang.php" method="post">
 <table border="0">    
<tr>
        <td><p>Nama</td>
        <td>:</td>
        <td>
        <select name="nama">
        <?php 
        include "koneksi.php";
        $brg = mysqli_query($conn, "SELECT * FROM barang ORDER BY id DESC");
        while($b=mysqli_fetch_array($brg)){
        ?>      
                <option value="<?php echo $b['nama']; ?>"><?php echo $b['nama'] ?></option>
                <?php 
        }
        ?>
        </select>
        </td>
</tr>    
<tr>
        <td><p>Jumlah Terjual</td>
        <td>:</td>
        <td><input name = "jumlah_terjual" type = text><br></td>
</tr> 
<tr>
        <td><p>Harga Penjualan</td>
        <td>:</td>
        <td><input name = "harga_penjualan" type = text><br></td>
</tr> 
<tr>
        <td><p></td>
        <td></td>
        <td>
        <input type = "submit" value= "Kirim" name="kirim">
        <input type = "reset" value= "Reset" name="reset"><br>
</td>
</tr>
</table>
<form>
</body>
</html>

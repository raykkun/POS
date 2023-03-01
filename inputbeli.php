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
<h3>Input Pembelian Barang</h3>

<form action="simpanbeli.php" method="post">
 <table border="0">
<tr>
        <td><p>Tanggal</td>
        <td>:</td>
        <td><input name = "tanggal" type = date><br></td>
</tr>       
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
        <td><p>Suplier</td>
        <td>:</td>
        <td>
        <select name="suplier">
        <?php 
        include "koneksi.php";
        $brg = mysqli_query($conn, "SELECT * FROM barang ORDER BY id DESC");
        while($b=mysqli_fetch_array($brg)){
        ?>      
                <option value="<?php echo $b['suplier']; ?>"><?php echo $b['suplier'] ?></option>
                <?php 
        }
        ?>
        </select>
        </td>
</tr> 
<tr>
        <td><p>Jumlah</td>
        <td>:</td>
        <td><input name = "jumlah" type = number><br></td>
</tr> 
<tr>
        <td><p>Harga Beli</td>
        <td>:</td>
        <td><input name = "harga" type = number><br></td>
</tr> 
<tr>
        <td><p>Diskon</td>
        <td>:</td>
        <td><input name = "diskon" type = number> %<br></td>
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

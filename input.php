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
<h3>Input Barang</h3>

<form action="simpan.php" method="post">
 <table border="0">
<tr>
        <td><p>Nama</td>
        <td>:</td>
        <td><input name = "nama" type = text><br></td>
</tr>      
<tr>
        <td><p>Jenis Barang</td>
        <td>:</td>
        <td>
        <select name = "jenis">
                <option>Makanan
                <option>Minuman
        </select><br>
</td>
</tr>
<tr>
        <td><p>Suplier</td>
        <td>:</td>
        <td><input name = "suplier" type = text><br></td>
</tr> 
<tr>
        <td><p>Modal</td>
        <td>:</td>
        <td><input name = "modal" type = number><br></td>
</tr> 
<tr>
        <td><p>Harga Jual</td>
        <td>:</td>
        <td><input name = "harga" type = number><br></td>
</tr> 
<tr>
        <td><p>Jumlah</td>
        <td>:</td>
        <td><input name = "jumlah" type = number><br></td>
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

<html>
<head>
	
	<title>AKN Bojonegoro</title>
	</head>
<body>
<background-color="#red">
<table border="1" align="center" cellpadding="5" cellspacing="0">
	<tr>
		<th width="50">NO</th>
		<th width="150">KODE BARANG</th>
		<th width="150">NAMA BARANG</th>
		<th width="150">HARGA</th>
	</tr>
	<tr>
		<td>1</td>
		<td>MB25</td>
		<td>MOTHERBOARD</td>
		<td>250</td>
	</tr>
	<tr>
		<td>2</td>
		<td>PR80</td>
		<td>PRINTER</td>
		<td>750</td>
	</tr>
	<tr>
		<td>3</td>
		<td>M717</td>
		<td>MOUSE</td>
		<td>30</td>
	</tr>
	<tr>
		<td>4</td>
		<td>MM34</td>
		<td>MEMORI</td>
		<td>150</td>
	</tr>
	<tr>
		<td>5</td>
		<td>K987/td>
		<td>KEYBOARD</td>
		<td>35</td>
	</tr>

<form method=get>
<h3>
<center>

<br>Menghitung Total Harga<br>
<table border=1 align="CENTER">
<tr><td>kode :<td><input type=text name=kode ></td></td></tr>
<tr><td>Nama Barang :<td><input type=text name=nama></td></td></tr>
<tr><td>harga :<td><input type=text name=harga></td></td></tr>
</table>
<CENTER><input type=submit value=Hitung><CENTER><CENTER><input type=reset value=Batal></center>
</form>
<pre>
<?php
$kode=$_GET['kode'];
$nama=$_GET['nama'];
$harga=$_GET['harga'];

echo "<tr><td>kode = <td>$kode</td></td></tr><br>";
echo "<tr><td>Nama Barang = <td>$nama</td></td></tr><br>";
echo "<tr><td>Harga = <td>Rp. $harga</td></td></tr><br>";
?>









</body>
</html>
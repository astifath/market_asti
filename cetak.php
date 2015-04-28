<?php 
mysql_connect("localhost","root","");
mysql_select_db("mini_market");		
?>
<html>
<title>Produk - Asti Fath Fadlilah</title>
<link href="model.css" rel="stylesheet" type="text/css"/> 
<body>
<center>
<div id="bungkus">
<div id="atas">
	<a href="index.php">Pelanggan |</a> 
	<a href="pesan.php">Pesan |</a> 
	<a href="produk.php">Produk |</a>
	<a href="kuitansi.php">Kuitansi |</a>
	<a href="faktur.php">Faktur |</a>
	<a href="dp.php">Detail Pesan |</a>
	<a href="dp.php">&Cetak</a>
	</div>
	<div id="cetak">
		<table>
			<font color="white">Penggunaan CROSS JOIN</font>
		<tr><th>No</th>
				<th>ID Pelanggan</th>
				<th>Nama Pelanggan</th>
				<th>Alamat</th>
				<th>Telepon</th>
			<th>ID Produk</th>
				<th>Nama Produk</th>
				<th>Satuan</th>
				<th>Harga</th>
				<th>Stock</th></tr>
<?php
	$cetak=mysql_query("SELECT * FROM pelanggan cross join produk");
	while ($tampil=mysql_fetch_array($cetak)) {
		?>
		<tr>
			<td><?php echo "$tampil[no]";?></td>
			<td><?php echo"$tampil[id_pelanggan]";?></td>
					<td><?php echo"$tampil[nm_pelanggan]";?></td>
					<td><?php echo"$tampil[alamat]";?></td>
					<td><?php echo"$tampil[telepon]";?></td>
					<td><?php echo "$tampil[id_produk]";?></td>
					<td><?php echo "$tampil[nm_produk]";?></td>
					<td><?php echo "$tampil[satuan]";?></td>
					<td><?php echo "$tampil[harga]";?></td>
					<td><?php echo "$tampil[stock]";?></td>
	     			
				</tr>
	<?php 
	}
?>
</table>
<font color="white">Penggunaan INNER JOIN</font>
<table>
			<tr><th>No</th>
				<th>ID Pelanggan</th>
				<th>Nama Pelanggan</th>
				<th>produk</th>
			</tr>
<?php
$cetak=mysql_query("SELECT * FROM pesan,pelanggan,detail_pesan,produk where pesan.id_pelanggan=pelanggan.id_pelanggan
					AND pesan.id_pesan=detail_pesan.id_pesan
					AND detail_pesan.id_produk=produk.id_produk");
	$no=0;
	while ($show=mysql_fetch_array($cetak)) {
		$no++;
		?>
		<tr>
			<td><?php echo $no?></td>
 			<td><?php echo"$show[id_pelanggan]";?></td>
			<td><?php echo"$show[nm_pelanggan]";?></td>
			<td><?php echo"$show[nm_produk]";?></td>
		<?php
	}
?>
</table>	
	</div>
<div id="footer"><font color="white" size="2px">Asti Fath Fadlilah | 12 RPL C</font></div>
</div>
</body>
</html>
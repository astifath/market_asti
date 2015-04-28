<?php
mysql_connect("localhost","root","");
mysql_select_db("mini_market");
?>
<html>
<title>Pelanggan - Asti Fath Fpadlilah</title>
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
	<a href="cetak.php">&Cetak</a>
	</div>
	<div id="kiri">
	<br>
	Inputan Pelanggan<br><br>
	<table>
	<form method="post" action="go.php?halaman=simpan_pelanggan">
	<tr><td>ID Pelanggan </td><td><input type="text" name="id_pel" size="27"></td></tr>
	<tr><td>Nama Pelanggan</td><td><input type="text" name="nm_pel" size="27"></td></tr>
	<tr><td>Alamat</td><td><input type="text" name="alamat" size="27"></td></td></tr>
	<tr><td>Telepon</td><td><input type="text" name="telepon" size="27"></td></td></tr>
	<tr><td>Email</td><td><input type="text" name="email" size="27"></td></td></tr>
	<tr><td><br><input type=submit value="Simpan"></td></tr>
	</form></table></div>
<div id="kanan"></div>
<div id="batas"></div>
<div id="bawah">
	<table>
		Tabel Pelangan
			<tr><th>No</th>
				<th>ID Pelanggan</th>
				<th>Nama Pelanggan</th>
				<th>Alamat</th>
				<th>Telepon</th>
				<th>E-mail</th></tr>
			<?php
			$data=mysql_query("SELECT * from pelanggan order by no");
			while ($show=mysql_fetch_array($data)) 
			{
				?>
				<tr>    	
	     			<td><?php echo"$show[no]";?></td>
	     			<td><?php echo"$show[id_pelanggan]";?></td>
					<td><?php echo"$show[nm_pelanggan]";?></td>
					<td><?php echo"$show[alamat]";?></td>
					<td><?php echo"$show[telepon]";?></td>
					<td><?php echo"$show[email]";?></td>
					<td><a href><img src="img/edit.png"> </a></td>
					<td><a href><img src="img/hapus.png"> </a></td>
					</tr>
			<?php
			}
			?>
			<br>
	</table></div>
<div id="batas"></div>
<div id="footer"><font color="white" size="2px">Asti Fath Fadlilah | 12 RPL C</font></div>
</div>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mini_market");
?>
<html>
<title>Kuitansi - Asti Fath Fadlilah</title>
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
	Inputan Kuitansi<br><br>
	<form method="post" action="go.php?halaman=simpan_kuitansi">
		<table>
	<tr><td>ID Kuitansi</td><td><input type="text" name="id_kui" size="27"></td></tr>
	<tr><td>Tanggal kuitansi</td><td><input type="text" name="tgl_kui" placeholder="YYYY-MM-DD" size="27"></td></tr>
	<tr><td><br><input type=submit value="Simpan"></td></tr>
	</form>
	</table>
	</div>
<div id="kanan1">
	<table>
			<tr><th>No</th>
				<th>ID Kuitansi</th>
				<th>Tanggal Kuitansi</th>
				</tr>
			<?php
			$data=mysql_query("SELECT * from kuitansi order by no");
			while ($tampil=mysql_fetch_array($data)) 
			{
				?>

				<tr><td><?php echo "$tampil[no]";?></td>
					<td><?php echo "$tampil[id_kuitansi]";?></td>
					<td><?php echo "$tampil[tgl_kuitansi]";?></td>
					<td><a href><img src="img/edit.png"> </a></td>
					<td><a href><img src="img/hapus.png"> </a></td>
					</tr>
			<?php
			}
			?>
			<br>
	</table>
	</div>
<div id="batas"></div>
<div id="footer"><font color="white" size="2px">Asti Fath Fadlilah | 12 RPL C</font></div>
</div>
</body>
</html>
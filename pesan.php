<?php 
mysql_connect("localhost","root","");
mysql_select_db("mini_market");
?>
<html>
<title>Pesan - Asti Fath Fadlilah</title>
<body>
<link href="model.css" rel="stylesheet" type="text/css"/> 
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
	<div id="kiri"><br>Inputan Pesan<br><br>
	<table><form method="post" action="go.php?halaman=simpan_pesan">
	<tr><td>ID Pesan </td><td><input type="text" name="id_san" size="27"></td></tr>
	<tr><td>ID Pelanggan</td><td><input type="text" name="id_pel" size="27"></td></tr>
	<tr><td>Tanggal Pesan</td><td><input type="text" name="tgl_san" placeholder="YYYY-MM-DD" size="27"></td></td></tr>
	<tr><td><br><input type=submit value="Simpan"></td></tr>
	</form></table></div>
	<div id="kanan1">
		<table>
			<tr><th>No</th>
				<th>ID Pesan</th>
				<th>ID Pelanggan</th>
				<th>Tanggal Pesan</th></tr>

				<?php
				$data=mysql_query("SELECT * from pesan order by no");
				while ($show=mysql_fetch_array($data)) 
				{
					?>
					<tr><td><?php echo "$show[no]";?></td>
						<td><?php echo "$show[id_pesan]";?></td>
						<td><?php echo "$show[id_pelanggan]";?></td>
						<td><?php  echo "$show[tgl_pesan]";?></td>
					<td><a href><img src="img/edit.png"> </a></td>
					<td><a href><img src="img/hapus.png"> </a></td></tr>
				<?php
				}
				?>
		</table>
	</div>
	<div id="batas"></div>
<div id="footer"><font color="white" size="2px">Asti Fath Fadlilah | 12 RPL C</font></div>
</div>
</body>
</html>
<?php
mysql_connect("localhost","root","");
mysql_select_db("mini_market");


$halaman=$_GET['halaman'];
switch ($halaman) {

case "simpan_pesan":

$id_san 	= $_POST['id_san'];
$tgl_san	= $_POST['tgl_san'];
$id_pel		= $_POST['id_pel'];

$kueri=mysql_query("INSERT INTO pesan (id_pesan,tgl_pesan,id_pelanggan)
		VALUES ('$id_san','$tgl_san','$id_pel')
			");
if ($kueri){
echo"<script languange='javascript'>
alert('Pesan disimpan!');
document.location='pesan.php';
</script>";
}
break;
case "simpan_dp":

$id_pesan 	= $_POST['id_pes'];
$id_produk	= $_POST['id_pro'];
$jumlah		= $_POST['jumlah'];
$harga		= $_POST['harga'];

$tampil=mysql_query("INSERT INTO detail_pesan (id_pesan,id_produk,jumlah,harga)
			VALUES ('$id_pesan','$id_produk','$jumlah','$harga')
	");
if ($tampil) {
	echo"<script language='javascript'>
	alert('Detail Pesan disimpan!');
	document.location='dp.php';
	</script>";
}
break;
case "simpan_faktur":
$id_faktur 	= $_POST['id_fak'];
$tgl_faktur	= $_POST['tgl_fak'];

$tampil=mysql_query("INSERT INTO faktur (id_faktur,tgl_faktur)
			VALUES ('$id_faktur','$tgl_faktur')
	");

if ($tampil) {
	echo"<script language='javascript'>
	alert('Faktur disimpan!');
	document.location='faktur.php';
	</script>";
}
break;
case "simpan_pelanggan":
$id_pel = $_POST['id_pel'];
$nm_pel = $_POST['nm_pel'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$email = $_POST['email'];

$kueri=mysql_query("INSERT INTO pelanggan (id_pelanggan,nm_pelanggan,alamat,telepon,email)
			VALUES ('$id_pel','$nm_pel','$alamat','$telepon','$email')
			");
if ($kueri){
echo"<script languange='javascript'>
alert('Data Pelanggan Disimpan!');
document.location='index.php';
</script>";
}
break;
case "simpan_kuitansi":
$id_kuitansi 	= $_POST['id_kui'];
$tgl_kuitansi	= $_POST['tgl_kui'];

$tampil=mysql_query("INSERT INTO kuitansi (id_kuitansi,tgl_kuitansi)
			VALUES ('$id_kuitansi','$tgl_kuitansi')
	");

if ($tampil) {
	echo"<script language='javascript'>
	alert('Disimpan!');
	document.location='kuitansi.php';
	</script>";
}
break;
case "simpan_produk":
$id_produk 	= $_POST['id_duk'];
$nm_produk	= $_POST['nm_duk'];
$satuan		= $_POST['satuan'];
$harga		= $_POST['harga'];
$stock		= $_POST['stock'];

$tampil=mysql_query("INSERT INTO produk (id_produk,nm_produk,satuan,harga,stock)
			VALUES ('$id_produk','$nm_produk','$satuan','$harga','$stock')
	");

if ($tampil) {
	echo"<script language='javascript'>
	alert('Produk disimpan!');
	document.location='produk.php';
	</script>";
}
break;
}
?>
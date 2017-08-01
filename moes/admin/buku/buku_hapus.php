<?php
	if(!defined("INDEX")) die("---");

	$data=mysql_fetch_array(mysql_query("select * from buku where id_buku='$_GET[id]'"));
	if($data['gambar'] != "") unlink("../gambar/buku/$data[gambar]");
	if($data['pdf'] != "") unlink("../pdf/buku/$data[pdf]");

	mysql_query("delete from buku where id_buku='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=buku'>";
?>
<?php
	if(!defined("INDEX")) die("---");

	$data=mysql_fetch_array(mysql_query("select * from berita where id_berita='$_GET[id]'"));
	if($data['gambar'] != "") unlink("../gambar/berita/$data[gambar]");

	mysql_query("delete from berita where id_berita='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=berita'>";
?>
<?php
	if(!defined("INDEX")) die("---");

	$data=mysql_fetch_array(mysql_query("select * from jurnalan where id_jurnalan='$_GET[id]'"));
	if($data['gambar'] != "") unlink("../gambar/jurnal/$data[gambar]");
	if($data['pdf'] != "") unlink("../pdf/jurnal/$data[pdf]");

	mysql_query("delete from jurnalan where id_jurnalan='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=jurnalan'>";
?>
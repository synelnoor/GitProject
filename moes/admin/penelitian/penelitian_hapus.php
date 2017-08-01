<?php
	if(!defined("INDEX")) die("---");

	$data=mysql_fetch_array(mysql_query("select * from penelitian where id_penelitian='$_GET[id]'"));
	if($data['gambar'] != "") unlink("../gambar/penelitian/$data[gambar]");
	if($data['pdf'] != "") unlink("../pdf/penelitian/$data[pdf]");

	mysql_query("delete from penelitian where id_penelitian='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=penelitian'>";
?>
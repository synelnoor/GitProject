<?php
	if(!defined("INDEX")) die("---");

	$data=mysql_fetch_array(mysql_query("select * from dosen where id_dosen='$_GET[id]'"));
	if($data['gambar'] != "") unlink("../gambar/dosen/$data[gambar]");

	mysql_query("delete from dosen where id_dosen='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=dosen'>";
?>
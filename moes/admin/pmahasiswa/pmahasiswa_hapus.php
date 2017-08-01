<?php
	if(!defined("INDEX")) die("---");

	$data=mysql_fetch_array(mysql_query("select * from pmahasiswa where id_pmahasiswa='$_GET[id]'"));
	if($data['gambar'] != "") unlink("../gambar/pmahasiswa/$data[gambar]");
	if($data['pdf'] != "") unlink("../pdf/pmahasiswa/$data[pdf]");

	mysql_query("delete from pmahasiswa where id_pmahasiswa='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=pmahasiswa'>";
?>
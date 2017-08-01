<?php
	if(!defined("INDEX")) die("---");

	$data=mysql_fetch_array(mysql_query("select * from dokumen where id_dokumen='$_GET[id]'"));
	
	if($data['pdf'] != "") unlink("../pdf/dokumen/$data[pdf]");

	mysql_query("delete from dokumen where id_dokumen='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=dokumen'>";
?>
<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("UPDATE organisasi SET nama='$_POST[nama]', jabatan='$_POST[jabatan]', urutan='$_POST[urutan]' 
				WHERE id_organisasi='$_POST[id]'") or die(mysql_error());
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=organisasi'>";
?>
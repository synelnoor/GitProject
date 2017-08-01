<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("UPDATE karyawan SET 
		nama='$_POST[nama]', 
		pangkat ='$_POST[pangkat]', 
		pendidikan ='$_POST[pendidikan]',
		urutan='$_POST[urutan]' 
				WHERE id_karyawan='$_POST[id]'") or die(mysql_error());
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=karyawan'>";
?>
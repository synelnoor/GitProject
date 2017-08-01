<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("INSERT INTO karyawan set
			nama 	= '$_POST[nama]',
			pangkat	= '$_POST[pangkat]',
			pendidikan	= '$_POST[pendidikan]',
			urutan	= '$_POST[urutan]'
		") or die(mysql_error());
	
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=karyawan'>";
?>
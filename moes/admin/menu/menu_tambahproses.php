<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("INSERT INTO menu set
			judul 	= '$_POST[judul]',
			link	= '$_POST[link]',
			urutan	= '$_POST[urutan]'
		") or die(mysql_error());
	
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=menu'>";
?>
<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("INSERT INTO organisasi set
			nama 	= '$_POST[nama]',
			jabatan	= '$_POST[jabatan]',
			urutan	= '$_POST[urutan]'
		") or die(mysql_error());
	
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=organisasi'>";
?>
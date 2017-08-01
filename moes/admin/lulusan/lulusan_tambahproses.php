<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("INSERT INTO lulusan set
			nim 	= '$_POST[nim]',
			nama	= '$_POST[nama]',
			tahun	= '$_POST[tahun]'
			
		") or die(mysql_error());
	
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=lulusan'>";
?>
<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("UPDATE lulusan SET 
		nim ='$_POST[nim]', 
		nama ='$_POST[nama]', 
		tahun ='$_POST[tahun]'
	 
				WHERE id_lulusan='$_POST[id]'") or die(mysql_error());
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=lulusan'>";
?>
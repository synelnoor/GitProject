<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("delete from subsubmenu where id_subsubmenu='$_GET[id]'") or die(mysql_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=subsubmenu'>";
?>
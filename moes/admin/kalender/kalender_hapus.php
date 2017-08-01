<?php
if(!defined("INDEX")) die("---");
	
$data=mysql_fetch_array(mysql_query("select * from kalender where id_kalender='$_GET[id]'"));
if($data['gambar'] != "") unlink("../gambar/kalender/$data[gambar]");

mysql_query("delete from kalender where id_kalender='$_GET[id]'") or die(mysql_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?tampil=kalender'>";
?>
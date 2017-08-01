<?php
if(!defined("INDEX")) die("---");
	
$data=mysql_fetch_array(mysql_query("select * from jwkuliah where id_jwkuliah='$_GET[id]'"));
if($data['gambar'] != "") unlink("../gambar/jwkuliah/$data[gambar]");

mysql_query("delete from jwkuliah where id_jwkuliah='$_GET[id]'") or die(mysql_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?tampil=jwkuliah'>";
?>
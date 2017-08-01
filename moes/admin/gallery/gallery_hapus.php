<?php
if(!defined("INDEX")) die("---");
	
$data=mysql_fetch_array(mysql_query("select * from gallery where id_gallery='$_GET[id]'"));
if($data['gambar'] != "") unlink("../gambar/gallery/$data[gambar]");

mysql_query("delete from gallery where id_gallery='$_GET[id]'") or die(mysql_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?tampil=gallery'>";
?>
<?php
if(!defined("INDEX")) die("---");
	
$data=mysql_fetch_array(mysql_query("select * from sertifikat where id_sertifikat='$_GET[id]'"));
if($data['gambar'] != "") unlink("../gambar/sertifikat/$data[gambar]");

mysql_query("delete from sertifikat where id_sertifikat='$_GET[id]'") or die(mysql_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?tampil=sertifikat'>";
?>
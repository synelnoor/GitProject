<?php 
	if(!defined("INDEX")) die("---");

	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];
	
	$tanggal	= date('Ymd');	
	
	if($lokasi_gambar==""){
		mysql_query("UPDATE jwkuliah SET judul='$_POST[judul]' WHERE id_jwkuliah='$_POST[id]'") or die(mysql_error());
	}else{
		$data=mysql_fetch_array(mysql_query("select * from jwkuliah where id_jwkuliah='$_POST[id]'"));
		if($data['gambar'] != "") unlink("../gambar/jwkuliah/$data[gambar]");
		
		move_uploaded_file($lokasi_gambar,"../gambar/jwkuliah/$nama_gambar");
		mysql_query("UPDATE jwkuliah SET judul='$_POST[judul]', gambar='$nama_gambar' WHERE id_jwkuliah='$_POST[id]'") or die(mysql_error());
	}
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=jwkuliah'>";
?>
<?php 
	if(!defined("INDEX")) die("---");

	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];
	
	$tanggal	= date('Ymd');	
	
	if($lokasi_gambar==""){
		mysql_query("UPDATE gallery SET judul='$_POST[judul]' WHERE id_gallery='$_POST[id]'") or die(mysql_error());
	}else{
		$data=mysql_fetch_array(mysql_query("select * from gallery where id_gallery='$_POST[id]'"));
		if($data['gambar'] != "") unlink("../gambar/gallery/$data[gambar]");
		
		move_uploaded_file($lokasi_gambar,"../gambar/gallery/$nama_gambar");
		mysql_query("UPDATE gallery SET judul='$_POST[judul]', gambar='$nama_gambar' WHERE id_gallery='$_POST[id]'") or die(mysql_error());
	}
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=gallery'>";
?>
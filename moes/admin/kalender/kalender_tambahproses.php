<?php 
	if(!defined("INDEX")) die("---");

	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];
	
	$tanggal	= date('Ymd');	
	
	if($lokasi_gambar==""){
		mysql_query("INSERT INTO kalender SET
				judul 	= '$_POST[judul]',
				
			") or die(mysql_error());
	}else{
		move_uploaded_file($lokasi_gambar,"../gambar/kalender/$nama_gambar");
		mysql_query("INSERT INTO kalender SET
				judul 	= '$_POST[judul]',
				
				gambar	= '$nama_gambar'
			") or die(mysql_error());
	}
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=kalender'>";
?>
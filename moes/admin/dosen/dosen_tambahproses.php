<?php
	if(!defined("INDEX")) die("---");
	
	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];
	
	
	
	if($lokasi_gambar==""){
		mysql_query("INSERT INTO dosen set
				namadosen	= '$_POST[namadosen]',
				pangkat		= '$_POST[pangkat]',
				pendidikan	= '$_POST[pendidikan]'
				
			") or die(mysql_error());
	}else{
		move_uploaded_file($lokasi_gambar,"../gambar/dosen/$nama_gambar");
		mysql_query("INSERT INTO dosen set
				namadosen	= '$_POST[namadosen]',
				pangkat		= '$_POST[pangkat]',
				pendidikan	= '$_POST[pendidikan]',
				gambar 	= '$nama_gambar'
			") or die(mysql_error());
	}
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=dosen'>";
?>
<?php
	if(!defined("INDEX")) die("---");

	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];
	
	
	
	if($lokasi_gambar==""){
		mysql_query("UPDATE dosen SET 
				namadosen	= '$_POST[namadosen]',
				pangkat		= '$_POST[pangkat]',
				pendidikan	= '$_POST[pendidikan]'
				
			WHERE id_dosen='$_POST[id]'") or die(mysql_error());
	}else{
		$data=mysql_fetch_array(mysql_query("select * from dosen where id_dosen='$_POST[id]'"));
		if($data['gambar'] != "") unlink("../gambar/dosen/$data[gambar]");
		
		move_uploaded_file($lokasi_gambar,"../gambar/dosen/$nama_gambar");
		mysql_query("UPDATE dosen SET 
				namadosen	= '$_POST[namadosen]',
				pangkat		= '$_POST[pangkat]',
				pendidikan	= '$_POST[pendidikan]',
				gambar 	= '$nama_gambar'
				
			WHERE id_dosen='$_POST[id]'") or die(mysql_error());
	}
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=dosen'>";
?>
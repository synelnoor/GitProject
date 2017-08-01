<?php
	if(!defined("INDEX")) die("---");
	
	$nama_gambar 	= $_FILES['gambar']['name'];
	$lokasi_gambar 	= $_FILES['gambar']['tmp_name'];
	$tipe_gambar	= $_FILES['gambar']['type'];

	$nama_pdf	= $_FILES['pdf']['name'];
	$lokasi_pdf = $_FILES['pdf']['tmp_name'];
	$tipe_pdf	= $_FILES['pdf']['type'];

	$tanggal	= date('Ymd');	
	$isi 		= addslashes($_POST['isi']);

	if($lokasi_gambar=="" | $lokasi_pdf==""){
		mysql_query("UPDATE buku SET 
				judul	= '$_POST[judul]',
				id_dosen ='$_POST[dosen]',
				isi		= '$isi',
				tanggal	= '$tanggal'
			WHERE id_buku='$_POST[id]'") or die(mysql_error());
	}else{
		$data=mysql_fetch_array(mysql_query("select * from buku where id_buku='$_POST[id]'"));
		if($data['gambar'] != "") unlink("../gambar/buku/$data[gambar]");
		if($data['pdf'] != "") unlink("../pdf/buku/$data[pdf]");
		
		move_uploaded_file($lokasi_gambar,"../gambar/buku/$nama_gambar");
		move_uploaded_file($lokasi_pdf,"../pdf/buku/$nama_pdf");
		mysql_query("UPDATE buku SET 
				judul	= '$_POST[judul]',
				id_dosen ='$_POST[dosen]',
				isi		= '$isi',
				tanggal	= '$tanggal',
				gambar 	= '$nama_gambar',
				pdf 	= '$nama_pdf'
			WHERE id_buku='$_POST[id]'") or die(mysql_error());
	}
	echo"Data telah Di Edit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=buku'>";
?>
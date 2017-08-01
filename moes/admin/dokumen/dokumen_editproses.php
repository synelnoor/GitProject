<?php
	if(!defined("INDEX")) die("---");
	
	

	$nama_pdf	= $_FILES['pdf']['name'];
	$lokasi_pdf = $_FILES['pdf']['tmp_name'];
	$tipe_pdf	= $_FILES['pdf']['type'];

	$tanggal	= date('Ymd');	
	$isi 		= addslashes($_POST['isi']);

	if($lokasi_pdf==""){
		mysql_query("UPDATE dokumen SET 
				judul	= '$_POST[judul]',
				id_dosen ='$_POST[dosen]',
				tanggal	= '$tanggal'
			WHERE id_dokumen='$_POST[id]'") or die(mysql_error());
	}else{
		$data=mysql_fetch_array(mysql_query("select * from dokumen where id_dokumen='$_POST[id]'"));
		
		if($data['pdf'] != "") unlink("../pdf/dokumen/$data[pdf]");
		
		
		move_uploaded_file($lokasi_pdf,"../pdf/dokumen/$nama_pdf");
		mysql_query("UPDATE dokumen SET 
				judul	= '$_POST[judul]',
				id_dosen ='$_POST[dosen]',
				isi		= '$isi',
				tanggal	= '$tanggal',
				pdf 	= '$nama_pdf'
			WHERE id_dokumen='$_POST[id]'") or die(mysql_error());
	}
	echo"Data telah edit";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=dokumen'>";
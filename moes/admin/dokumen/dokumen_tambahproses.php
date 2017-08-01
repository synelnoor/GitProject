<?php
	if(!defined("INDEX")) die("---");
	
	$nama_pdf	= $_FILES['pdf']['name'];
	$lokasi_pdf = $_FILES['pdf']['tmp_name'];
	$tipe_pdf	= $_FILES['pdf']['type'];

	$tanggal	= date('Ymd');	
	$isi 		= addslashes($_POST['isi']);
	
	if( $lokasi_pdf==""){
		mysql_query("INSERT INTO dokumen set
				judul	= '$_POST[judul]',
				id_dosen ='$_POST[dosen]',
				tanggal	= '$tanggal'
				
			") or die(mysql_error());
	
	}else{
		
		
		move_uploaded_file($lokasi_pdf,"../pdf/dokumen/$nama_pdf");
		mysql_query("INSERT INTO dokumen set
				judul	= '$_POST[judul]',
				id_dosen ='$_POST[dosen]',
				tanggal	= '$tanggal',
				pdf 	= '$nama_pdf'
			") or die(mysql_error());
	}
	

	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?tampil=dokumen'>";
	?>
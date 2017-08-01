<?php
	if(!defined("INDEX")) die("---");
	
	include("../lib/fungsi_tglindonesia.php");
?>

<h2 class="sub-header">Data Dokumen</h2>

<a href="?tampil=dokumen_tambah" class="btn btn-primary">Tambah Dokumen</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Judul Dokumen</th>
		<th>Dosen</th>
		<th>tanggal</th>
		<th>Aksi</th>
	</tr>
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM dokumen") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			$tanggal = tgl_indonesia($data['tanggal']);
			$sqldosen = mysql_query("SELECT * FROM dosen where id_dosen='$data[id_dosen]'");
			$datadosen = mysql_fetch_array($sqldosen);

			
	?>
	<tr>
		<th> <?php echo $no; ?> </th>
		<th> <?php echo $data['judul']; ?> </th>
		<th> <?php echo $datadosen['namadosen']; ?> </th>
		<th> <?php echo $tanggal; ?> </th>
		<th>
			<a href="?tampil=dokumen_edit&id=<?php echo $data['id_dokumen']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=dokumen_hapus&id=<?php echo $data['id_dokumen']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</th>
	</tr>

	<?php 
			$no++;
		} 
	?>

	</table>
<?php
	if(!defined("INDEX")) die("---");
	
	include("../lib/fungsi_tglindonesia.php");
?>

<h2 class="sub-header">Data Jurnal Administrasi Negara</h2>

<a href="?tampil=jurnalan_tambah" class="btn btn-primary">Tambah Jurnal Administrasi Negara</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Judul</th>
		<th>tanggal</th>
		<th>Aksi</th>
	</tr>
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM jurnalan") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			$tanggal = tgl_indonesia($data['tanggal']);
			
			
	?>
	<tr>
		<th> <?php echo $no; ?> </th>
		<th> <?php echo $data['judul']; ?> </th>
		<th> <?php echo $tanggal; ?> </th>
		<th>
			<a href="?tampil=jurnalan_edit&id=<?php echo $data['id_jurnalan']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=jurnalan_hapus&id=<?php echo $data['id_jurnalan']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</th>
	</tr>

	<?php 
			$no++;
		} 
	?>

	</table>
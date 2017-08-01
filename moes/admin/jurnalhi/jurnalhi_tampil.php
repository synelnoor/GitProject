<?php
	if(!defined("INDEX")) die("---");
	
	include("../lib/fungsi_tglindonesia.php");
?>

<h2 class="sub-header">Data Jurnal Hubungan Internasional</h2>

<a href="?tampil=jurnalhi_tambah" class="btn btn-primary">Tambah Jurnal Hubungan Internasional</a><br><br>

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
		$tampil = mysql_query("SELECT * FROM jurnalhi") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			$tanggal = tgl_indonesia($data['tanggal']);
			
			
	?>
	<tr>
		<th> <?php echo $no; ?> </th>
		<th> <?php echo $data['judul']; ?> </th>
		<th> <?php echo $tanggal; ?> </th>
		<th>
			<a href="?tampil=jurnalhi_edit&id=<?php echo $data['id_jurnalhi']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=jurnalhi_hapus&id=<?php echo $data['id_jurnalhi']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</th>
	</tr>

	<?php 
			$no++;
		} 
	?>

	</table>
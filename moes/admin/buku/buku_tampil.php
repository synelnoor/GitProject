<?php
	if(!defined("INDEX")) die("---");
	
	include("../lib/fungsi_tglindonesia.php");
?>

<h2 class="sub-header">Data Buku</h2>

<a href="?tampil=buku_tambah" class="btn btn-primary">Tambah Buku</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Judul Buku</th>
		<th>Dosen</th>
		<th>tanggal</th>
		<th>Aksi</th>
	</tr>
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM buku") or die(mysql_error());
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
			<a href="?tampil=buku_edit&id=<?php echo $data['id_buku']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=buku_hapus&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</th>
	</tr>

	<?php 
			$no++;
		} 
	?>

	</table>
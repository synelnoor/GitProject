<?php
	if(!defined("INDEX")) die("---");
	
	include("../lib/fungsi_tglindonesia.php");
?>

<h2 class="sub-header">Data Berita</h2>

<a href="?tampil=berita_tambah" class="btn btn-primary">Tambah Berita</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Judul Berita</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM berita") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			$tanggal = tgl_indonesia($data['tanggal']);
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['judul']; ?> </td>
		<td> <?php echo $tanggal; ?> </td>
		<td> 
			<a href="?tampil=berita_edit&id=<?php echo $data['id_berita']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=berita_hapus&id=<?php echo $data['id_berita']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
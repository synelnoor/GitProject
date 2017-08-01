<?php 
	if(!defined("INDEX")) die("---");
?>
<h2 class="sub-header">Data Sertifikat & Akreditasi</h2>

<a href="?tampil=sertifikat_tambah" class="btn btn-primary">Tambah Sertifikat</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Preview</th>
		<th>Judul Sertifikat</th>
		
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM sertifikat") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <img src="../gambar/sertifikat/<?php echo $data['gambar']; ?>" width="100"> </td>
		<td> <?php echo $data['judul']; ?> </td>
		<td> 
			<a href="?tampil=sertifikat_edit&id=<?php echo $data['id_sertifikat']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=sertifikat_hapus&id=<?php echo $data['id_sertifikat']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
<?php 
	if(!defined("INDEX")) die("---");
?>
<h2 class="sub-header">Data Gallery</h2>

<a href="?tampil=gallery_tambah" class="btn btn-primary">Tambah Gallery</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Foto</th>
		<th>Judul Foto</th>
		<th>Tanggal</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM gallery") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <img src="../gambar/gallery/<?php echo $data['gambar']; ?>" width="100"> </td>
		<td> <?php echo $data['judul']; ?> </td>
		<td> <?php echo $data['tanggal']; ?> </td>
		<td> 
			<a href="?tampil=gallery_edit&id=<?php echo $data['id_gallery']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=gallery_hapus&id=<?php echo $data['id_gallery']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
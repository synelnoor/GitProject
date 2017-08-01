<?php 
	if(!defined("INDEX")) die("---");
?>
<h2 class="sub-header">Data Jadwal Kuliah</h2>

<a href="?tampil=jwkuliah_tambah" class="btn btn-primary">Tambah Jadwal Kuliah</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Preview</th>
		<th>Judul Jadwal</th>
		
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM jwkuliah") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <img src="../gambar/jwkuliah/<?php echo $data['gambar']; ?>" width="100"> </td>
		<td> <?php echo $data['judul']; ?> </td>
		<td> 
			<a href="?tampil=jwkuliah_edit&id=<?php echo $data['id_jwkuliah']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=jwkuliah_hapus&id=<?php echo $data['id_jwkuliah']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
<?php 
	if(!defined("INDEX")) die("---");
?>
<h2 class="sub-header">Data Kalender</h2>

<a href="?tampil=kalender_tambah" class="btn btn-primary">Tambah Kalender</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Preview</th>
		<th>Judul Kalender</th>
		
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM kalender") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <img src="../gambar/kalender/<?php echo $data['gambar']; ?>" width="100"> </td>
		<td> <?php echo $data['judul']; ?> </td>
		<td> 
			<a href="?tampil=kalender_edit&id=<?php echo $data['id_kalender']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=kalender_hapus&id=<?php echo $data['id_kalender']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
<?php
	if(!defined("INDEX")) die("---");
	
	
?>

<h2 class="sub-header">Data Organisasi</h2>

<a href="?tampil=organisasi_tambah" class="btn btn-primary">Tambah Organisasi</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jabatan</th>
		<th>Urutan</th>
		
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM organisasi ORDER BY urutan") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['nama']; ?> </td>
		<td> <?php echo $data['jabatan']; ?> </td>
		<td> <?php echo $data['urutan']; ?> </td>
		
		<td> 
			<a href="?tampil=organisasi_edit&id=<?php echo $data['id_organisasi']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=organisasi_hapus&id=<?php echo $data['id_organisasi']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
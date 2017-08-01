<?php
	if(!defined("INDEX")) die("---");
	
	
?>

<h2 class="sub-header">Data Karyawan</h2>

<a href="?tampil=lulusan_tambah" class="btn btn-primary">Tambah Lulusan</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tahun</th>
		
		
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM lulusan ORDER BY tahun") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['nim']; ?> </td>
		<td> <?php echo $data['nama']; ?> </td>
		<td> <?php echo $data['tahun']; ?> </td>
		
		
		<td> 
			<a href="?tampil=lulusan_edit&id=<?php echo $data['id_lulusan']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=lulusan_hapus&id=<?php echo $data['id_lulusan']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
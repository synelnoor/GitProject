<?php
	if(!defined("INDEX")) die("---");
	
	
?>

<h2 class="sub-header">Data Karyawan</h2>

<a href="?tampil=karyawan_tambah" class="btn btn-primary">Tambah Karyawan</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Pangkat</th>
		<th>Pendidikan</th>
		<th>Urutan</th>
		
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM karyawan ORDER BY urutan") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['nama']; ?> </td>
		<td> <?php echo $data['pangkat']; ?> </td>
		<td> <?php echo $data['pendidikan']; ?> </td>
		<td> <?php echo $data['urutan']; ?> </td>
		
		<td> 
			<a href="?tampil=karyawan_edit&id=<?php echo $data['id_karyawan']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=karyawan_hapus&id=<?php echo $data['id_karyawan']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
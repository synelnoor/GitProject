<?php
	if(!defined("INDEX")) die("---");
	
	include("../lib/fungsi_tglindonesia.php");
?>

<h2 class="sub-header">Data Dosen</h2>

<a href="?tampil=dosen_tambah" class="btn btn-primary">Tambah Dosen</a><br><br>

<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Profile</th>
		<th>Nama Dosen</th>
		<th>Pangkat</th>
		<th>Pendidikan</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM dosen") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <img src="../gambar/dosen/<?php echo $data['gambar']; ?>" width="100">	</td>
		<td> <?php echo $data['namadosen']; ?> </td>
		<td> <?php echo $data['pangkat']; ?> </td>
		<td> <?php echo $data['pendidikan']; ?> </td>
		
		<td> 
			<a href="?tampil=dosen_edit&id=<?php echo $data['id_dosen']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=dosen_hapus&id=<?php echo $data['id_dosen']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Data Sub SubMenu</h2>

<a href="?tampil=subsubmenu_tambah" class="btn btn-primary">Tambah Sub SubMenu</a><br><br>
	
<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Judul Sub SubMenu</th>
		<th>induk</th>
		<th>Link</th>
		<th>Urutan</th>
		<th>Aksi</th>
	</tr>
	
	<?php
		$no=1;
		$sql = mysql_query("SELECT * FROM subsubmenu order by urutan") or die(mysql_error());
		while($data=mysql_fetch_array($sql)){
			$sqlsubmenu = mysql_query("SELECT * FROM submenu where id_submenu='$data[id_submenu]'");
			$datasubmenu = mysql_fetch_array($sqlsubmenu);
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['judul']; ?> </td>
		<td> <?php echo $datasubmenu['judul']; ?> </td>
		<td> <?php echo $data['link']; ?> </td>
		<td> <?php echo $data['urutan']; ?> </td>
		<td> 
			<a href="?tampil=subsubmenu_edit&id=<?php echo $data['id_subsubmenu']; ?>" class="btn btn-primary btn-sm"> Edit </a> 
			<a href="?tampil=subsubmenu_hapus&id=<?php echo $data['id_subsubmenu']; ?>" class="btn btn-danger btn-sm"> Hapus </a>
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
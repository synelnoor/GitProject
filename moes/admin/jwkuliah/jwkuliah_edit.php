<?php
	if(!defined("INDEX")) die("---");
	
	$tampil = mysql_query("SELECT * FROM jwkuliah WHERE id_jwkuliah='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($tampil);
?>
<h2 class="sub-header">Edit Jadwal</h2>
<form name="edit" method="post" action="?tampil=jwkuliah_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_jwkuliah']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">Judul Jadwal</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="judul" size="50" value="<?php echo $data['judul']; ?>"></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Gambar</label>
			<div class="col-md-4"><img src="../gambar/jwkuliah/<?php echo $data['gambar']; ?>" width="300" class="thumbnail"> <input type="file" class="form-control" name="gambar"></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div>
		</div>
	
</form>
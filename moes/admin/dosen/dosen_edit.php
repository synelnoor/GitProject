<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysql_query("SELECT * FROM dosen WHERE id_dosen='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($tampil);
?>
<h2 class="sub-header">Edit Dosen</h2>

<form name="edit" method="post" action="?tampil=dosen_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_dosen']; ?>">

		<div class="form-group"> 
			<label class="label-control col-md-2">Profil</label>
			<div class="col-md-4"><img src="../gambar/dosen/<?php echo $data['gambar']; ?>" width="300" class="thumbnail"> <input type="file" class="form-control" name="gambar"></div> 
		</div>
	
		<div class="form-group"> 
			<label class="label-control col-md-2">Nama Dosen</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="namadosen" size="50" value="<?php echo $data['namadosen']; ?>"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2">Pangkat</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="pangkat" size="50" value="<?php echo $data['pangkat']; ?>"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2">pendidikan</label>	
			<div class="col-md-4"> <input type="text" class="form-control" name="pendidikan" size="50" value="<?php echo $data['pendidikan']; ?>"></div> 
		</div>
		
		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div> 
		</div>
	
</form>
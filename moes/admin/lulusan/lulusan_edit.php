<?php
	if(!defined("INDEX")) die("---");

	$sql = mysql_query("SELECT * FROM lulusan WHERE id_lulusan='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($sql);
?>

<h2 class="sub-header">Edit Lulusan</h2>

<form name="edit" method="post" action="?tampil=lulusan_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_lulusan']; ?>">
	<div class="form-group">
		<label class="label-control col-md-2">NIM</label>	
		<div class="col-md-4">
			<input type="text" class="form-control" name="nim" class="form-control" value="<?php echo $data['nim']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Nama</label>	
		<div class="col-md-6">
			<input type="text" class="form-control" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Tahun</label>	
		<div class="col-md-6">
			<input type="text" class="form-control" name="tahun" class="form-control" value="<?php echo $data['tahun']; ?>">
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-md-2 col-md-offset-2">
			<input type="submit" name="edit" value="Edit" class="btn btn-primary">
		</div>
	</div>	
</form>
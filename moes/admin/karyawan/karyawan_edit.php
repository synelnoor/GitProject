<?php
	if(!defined("INDEX")) die("---");

	$sql = mysql_query("SELECT * FROM karyawan WHERE id_karyawan='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($sql);
?>

<h2 class="sub-header">Edit Karyawan</h2>

<form name="edit" method="post" action="?tampil=karyawan_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_karyawan']; ?>">
	<div class="form-group">
		<label class="label-control col-md-2">Nama</label>	
		<div class="col-md-4">
			<input type="text" class="form-control" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Pangkat</label>	
		<div class="col-md-6">
			<input type="text" class="form-control" name="pangkat" class="form-control" value="<?php echo $data['pangkat']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Pendidikan</label>	
		<div class="col-md-6">
			<input type="text" class="form-control" name="pendidikan" class="form-control" value="<?php echo $data['pendidikan']; ?>">
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Urutan</label>	
		<div class="col-md-1">
			<input type="text" class="form-control" name="urutan" class="form-control" value="<?php echo $data['urutan']; ?>">
		</div>
	</div>	
	<div class="form-group">
		<div class="col-md-2 col-md-offset-2">
			<input type="submit" name="edit" value="Edit" class="btn btn-primary">
		</div>
	</div>	
</form>
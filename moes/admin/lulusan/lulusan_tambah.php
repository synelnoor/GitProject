<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Tambah Lulusan</h2>

<form name="tambah" method="post" action="?tampil=lulusan_tambahproses" class="form-horizontal">
	<div class="form-group">
		<label class="label-control col-md-2">NIM</label>	
		<div class="col-md-4">
			<input type="text" class="form-control"  name="nim" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Nama</label>	
		<div class="col-md-6">
			<input type="text" class="form-control"  name="nama" class="form-control">
		</div>
	</div>
	<div class="form-group">
		<label class="label-control col-md-2">Tahun</label>	
		<div class="col-md-6">
			<input type="text" class="form-control"  name="tahun" class="form-control">
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-md-2 col-md-offset-2">
			<input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
		</div>
	</div>	
</form>
<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Tambah Dosen</h2>

<form name="tambah" method="post" action="?tampil=dosen_tambahproses" enctype="multipart/form-data" class="form-horizontal">	
		
		
		<div class="form-group">
			<label class="label-control col-md-2">Profil</label>	
			<div class="col-md-4"><input type="file" name="gambar" class="form-control"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Nama Dosen</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="namadosen" size="50"></div>
		</div>
		<div class="form-group">
			<label class="label-control col-md-2">Pangkat</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="pangkat" size="50"></div>
		</div>
		<div class="form-group">
			<label class="label-control col-md-2">Pendidikan</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="pendidikan" size="50"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>
		
</form>
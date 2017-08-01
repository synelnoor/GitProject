<?php 
	if(!defined("INDEX")) die("---");
?>
<h2 class="sub-header">Tambah Sertifikat & Akreditasi</h2>
<form name="tambah" method="post" action="?tampil=sertifikat_tambahproses" enctype="multipart/form-data" class="form-horizontal">
	
		
		<div class="form-group">
			<label class="label-control col-md-2">Judul Sertifikat & Akreditasi</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="judul" size="50"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Preview(jpg,png)</label>	
			<div class="col-md-4"> <input type="file" name="gambar" class="form-control"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>
		
	
</form>
<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Tambah Halaman</h2>

<form name="tambah" method="post" action="?tampil=halaman_tambahproses" class="form-horizontal">
	
		
		<div class="form-group">
			<label class="label-control col-md-2">Judul Halaman</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="judul" size="50"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Isi Halaman</label>			
			<div class="col-md-8"><textarea name="isi" cols="80" rows="15" class="form-control"></textarea></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>
		
	
</form>
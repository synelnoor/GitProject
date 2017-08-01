<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysql_query("SELECT * FROM pmahasiswa WHERE id_pmahasiswa='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($tampil);
?>

<h2 class="sub-header">Edit Publikasi Mahasiswa</h2>

<form name="edit" method="post" action="?tampil=pmahasiswa_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_pmahasiswa']; ?>">

		<div class="form-group">
			<label class="label-control col-md-2">Judul</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="judul" size="100" value="<?php echo $data['judul']; ?>"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Gambar</label>	
			<div class="col-md-4"><img src="../gambar/penelitian/<?php echo $data['gambar']; ?>" width="300" class="thumbnail"><input type="file" name="gambar" class="form-control"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Deskripsi</label>			
			<div class="col-md-8"><textarea name="isi" cols="80" rows="15" class="form-control"> <?php echo $data['isi']; ?></textarea></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">File(pdf)</label>	
			<div class="col-md-4"><?php echo $data['pdf']; ?> <input type="file" name="pdf" class="form-control"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div>
		</div>
		
</form>

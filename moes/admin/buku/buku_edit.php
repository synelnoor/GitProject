<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysql_query("SELECT * FROM buku WHERE id_buku='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($tampil);
?>

<h2 class="sub-header">Edit Buku</h2>

<form name="edit" method="post" action="?tampil=buku_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_buku']; ?>">

		<div class="form-group">
			<label class="label-control col-md-2">Judul Buku</label>	
			<div class="col-md-4"> <input type="text" class="form-control"  name="judul" size="50" value="<?php echo $data['judul']; ?>"></div>
		</div>

		<div class="form-group">
			<label class="label-control col-md-2">Dosen</label>	
			<div class="col-md-2"><select name="dosen" class="form-control">
			<?php
				$sqldosen = mysql_query("select * from dosen");
				while($datadosen = mysql_fetch_array($sqldosen)){
					if($datadosen['id_dosen'] == $data['id_dosen'])
					echo"<option value='$datadosen[id_dosen]' selected> $datadosen[namadosen] </option>";
					else  echo"<option value='$datadosen[id_dosen]'> $datadosen[namadosen] </option>";
				}
			?>
			</select class="form-control"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Gambar</label>	
			<div class="col-md-4"><img src="../gambar/buku/<?php echo $data['gambar']; ?>" width="300" class="thumbnail"><input type="file" name="gambar" class="form-control"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Deskripi</label>			
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

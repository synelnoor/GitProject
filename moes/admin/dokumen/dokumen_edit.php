<?php
	if(!defined("INDEX")) die("---");

	$tampil = mysql_query("SELECT * FROM dokumen WHERE id_dokumen='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($tampil);
?>

<h2 class="sub-header">Edit Dokumen</h2>

<form name="edit" method="post" action="?tampil=dokumen_editproses" enctype="multipart/form-data" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_dokumen']; ?>">

		<div class="form-group">
			<label class="label-control col-md-2">Judul Dokumen</label>	
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
			<label class="label-control col-md-2">File(pdf,doc)</label>	
			<div class="col-md-4"><?php echo $data['pdf']; ?> <input type="file" name="pdf" class="form-control"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div>
		</div>
		
</form>

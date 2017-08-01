<?php
	if(!defined("INDEX")) die("---");

	$sql = mysql_query("SELECT * FROM subsubmenu WHERE id_subsubmenu='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($sql);
?>

<h2 class="sub-header">Edit Sub SubMenu</h2>

<form name="edit" method="post" action="?tampil=subsubmenu_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_subsubmenu']; ?>">
	
		<div class="form-group"> 
			<label class="label-control col-md-2">Judul Sub SubMenu</label>	
			<div class="col-md-3"> <input type="text" class="form-control" name="judul" value="<?php echo $data['judul']; ?>"></div> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Induk</label>	
			<label class="label-control col-md-2"><select  class="form-control" name="induk">
			<?php
				$sqlsubmenu = mysql_query("select * from submenu");
				while($datasubmenu = mysql_fetch_array($sqlsubmenu)){
					if($datasubmenu['id_submenu'] == $data['id_submenu']) echo"<option value='$datasubmenu[id_submenu]' selected> $datasubmenu[judul] </option>";
					else  echo"<option value='$datasubmenu[id_submenu]'> $datasubmenu[judul] </option>";
				}
			?>
			</select  class="form-control"></label> 
		</div>
		
		<div class="form-group"> 
			<label class="label-control col-md-2">Link</label>			
			<div class="col-md-4"> <input type="text" class="form-control" name="link" value="<?php echo $data['link']; ?>"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2">Urutan</label>		
			<div class="col-md-1"> <input type="text" class="form-control" name="urutan" value="<?php echo $data['urutan']; ?>"></div> 
		</div>
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div>
		</div>
	
</form>
<?php
	if(!defined("INDEX")) die("---");
?>

<h2 class="sub-header">Tambah Menu</h2>
<form name="tambah" method="post" action="?tampil=subsubmenu_tambahproses" class="form-horizontal">
		<div class="form-group">
			<label class="label-control col-md-2">Judul sub subMenu</label>	
			<div class="col-md-3"> <input type="text" class="form-control"  name="judul"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Induk</label>	
			<div class="col-md-2"><select name="induk" class="form-control">
			<?php
				$sqlsubmenu = mysql_query("select * from submenu");
				while($datasubmenu = mysql_fetch_array($sqlsubmenu)){
					echo"<option value='$datasubmenu[id_submenu]'> $datasubmenu[judul] </option>";
				}
			?>
			</select></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Link</label>			
			<div class="col-md-4"> <input type="text" class="form-control"  name="link"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2">Urutan</label>		
			<div class="col-md-1"> <input type="text" class="form-control"  name="urutan"></div>
		</div>
		
		<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="tambah" value="Tambah" class="btn btn-primary"></div>
		</div>	
</form>
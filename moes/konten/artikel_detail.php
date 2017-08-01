<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("update artikel set hits=hits+1 where id_artikel='$_GET[id]'");
	
	$artikel = mysql_query("select * from artikel where id_artikel='$_GET[id]'");
	$data=mysql_fetch_array($artikel);
	$isi = $data['isi'];
?>
	<ul class="breadcrumb">
		<li>Beranda</li>
		<li class="active">Artikel detail</li>
	</ul>
	
	<div class="artikel">
		<h4><?php echo $data['judul']; ?></h4>
		<p>			
			<?php if($data['gambar']!="") ?> <img src="gambar/artikel/<?php echo $data['gambar']; ?>" class="thumbnail" width="100%">
				
			<?php echo $isi; ?> 
		</p>
	</div>


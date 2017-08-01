<?php
	if(!defined("INDEX")) die("---");
	
	mysql_query("update berita set hits=hits+1 where id_berita='$_GET[id]'");
	
	$berita = mysql_query("select * from berita where id_berita='$_GET[id]'");
	$data=mysql_fetch_array($berita);
	$isi = $data['isi'];
?>
	<ul class="breadcrumb">
		<li>Beranda</li>
		<li class="active">berita detail</li>
	</ul>
	
	<div class="berita">
		<h4 ><?php echo $data['judul']; ?></h4>
		<p>			
			<?php if($data['gambar']!="") ?> <img src="gambar/berita/<?php echo $data['gambar'];?>" class="thumbnail" width="100%">
				
			<?php echo $isi; ?> 
		</p>
	</div>

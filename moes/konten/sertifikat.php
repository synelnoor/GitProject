	
<?php
	if(!defined("INDEX")) die("---");
?>
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Sertifikat & Akreditas</li>
	</ul>
	
	<div class="sertifikat">
		<div class="row">
<?php	
	$no = 1;
	$sertifikat = mysql_query("select * from sertifikat order by id_sertifikat desc limit 12");
	while($data=mysql_fetch_array($sertifikat)){
?>
		<div class="col-md-8">
			<a  href="gambar/sertifikat/<?php echo $data['gambar']; ?>" title="<?php echo $data['judul']; ?>">
				<img src="gambar/sertifikat/<?php echo $data['gambar']; ?>" width="100%" height="350px" class="thumbnail" >
				<p align="center"> <?php echo $data['judul']; ?></p>
			</a>
		</div>
<?php
		if($no==4) echo"</div><div class='row'>";
		$no++;
	}
?>
		</div>
	</div>
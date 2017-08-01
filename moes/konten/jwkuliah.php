	
<?php
	if(!defined("INDEX")) die("---");
?>
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Jadwal Kuliah</li>
	</ul>
	
	<div class="jwkuliah">
		<div class="row">
<?php	
	$no = 1;
	$jwkuliah = mysql_query("select * from jwkuliah order by id_jwkuliah desc limit 12");
	while($data=mysql_fetch_array($jwkuliah)){
?>
		<div class="col-md-8">
			<a  href="gambar/jwkuliah/<?php echo $data['gambar']; ?>" title="<?php echo $data['judul']; ?>">
				<img src="gambar/jwkuliah/<?php echo $data['gambar']; ?>" width="100%" height="350px" class="thumbnail" >
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
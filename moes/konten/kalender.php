	
<?php
	if(!defined("INDEX")) die("---");
?>
	<ul class="breadcrumb">
		<li>Home</li>
		<li class="active">Kalender Akademik</li>
	</ul>
	
	<div class="Kalender">
		<div class="row">
<?php	
	$no = 1;
	$kalender = mysql_query("select * from kalender order by id_kalender desc limit 12");
	while($data=mysql_fetch_array($kalender)){
?>
		<div class="col-md-8">
			<a  href="gambar/kalender/<?php echo $data['gambar']; ?>" title="<?php echo $data['judul']; ?>">
				<img src="gambar/kalender/<?php echo $data['gambar']; ?>" width="100%" height="350px" class="thumbnail" >
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
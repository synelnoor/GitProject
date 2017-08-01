<ul class="breadcrumb">
		<li>Beranda</li>
		<li class="active">Publikasi Dosen</li>
	</ul>

<?php
	$sqldosen= mysql_query("select dosen.id_dosen FROM dosen where id_dosen IN (SELECT id_dosen FROM jurnal ) 
																  or id_dosen IN (SELECT id_dosen FROM buku ) 
																  or id_dosen IN (SELECT id_dosen FROM penelitian ) 
																 or id_dosen IN (SELECT id_dosen FROM dokumen )");
	while($datadosen= mysql_fetch_array($sqldosen)){
		


?>


<?php
	if(!defined("INDEX")) die("---");
	
		
	
	$dosen = mysql_query("select * from dosen where id_dosen ='$datadosen[id_dosen]'  order by id_dosen");
	$data=mysql_fetch_array($dosen)
	
?>


	
<div class="publikasidosen">
		
			<div class="col-lg-4">
			 	<?php if($data['gambar']!="") ?> <img class="img-circle" src="gambar/dosen/<?php echo $data['gambar']; ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          		<h3><?php echo $data['namadosen']; ?></h3>
          		<span class='btn btn-warningt'><a href="?tampil=jurnaldos&id=<?php echo $data['id_dosen']; ?>" >Jurnal</a></span>
          		<span class='btn btn-warningt'><a href="?tampil=bukudos&id=<?php echo $data['id_dosen']; ?>" >Buku </a></span>
          		<span class='btn btn-warningt'><a href="?tampil=pendos&id=<?php echo $data['id_dosen']; ?>" >Penelitian</a></span>
          		<span class='btn btn-warningt'><a href="?tampil=dokdos&id=<?php echo $data['id_dosen']; ?>" >Dokumen </a></span>
          		
          		
          		
          		 
		</div>
	
</div>


 <?php
}
	?>
<?php
	if(!defined("INDEX")) die("---");
	$dosen = mysql_query("select * from dosen where id_dosen='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($dosen);
	$namadosen = $data['namadosen'];
?>

<ul class="breadcrumb">
		<li>Home</li>
		<li >Publikasi Dosen</li>
		<li class="active" ><?php echo $data['namadosen']; ?></li>
		<li>Buku Dosen</li>
</ul>

<?php 
				$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
				$batas	= 3;
				$posisi = ($hal-1) * $batas ;
					$buku = mysql_query("select * from buku where id_dosen='$_GET[id]'")or die(mysql_error());
					while($data 	= mysql_fetch_array($buku)){
					$isi = substr($data['isi'],0,2500);
					$isi = substr($data['isi'],0,strrpos($isi," "));
				?>
				<div  class="buku">
					
					
					<h1><?php echo $data['judul']; ?></h1>
					<div class="col-md-4">
									<?php if($data['gambar']!="") ?> <img src="gambar/buku/<?php echo $data['gambar']; ?>" class="thumbnail" width="100%" height="150px">
					</div>
					<div class="row">
						<div class="col-md-8">							
								
								<h1>Deskripsi</h1>
								<p> <?php echo $isi; ?> ... <p>
								<p><a href="konten/download_buk.php?file=<?php echo $data['pdf'];?>" class="btn btn-warning btn-xs">Download >></a><p>
								<p><a href="konten/preview_buk.php?file=<?php echo $data['pdf'];?>"  class="btn btn-primary btn-xs">Preview  >></a> </p>
						</div>
					</div>
				</div>
				<?php 
						}
						$semua = mysql_query("select * from buku where id_dosen='$_GET[id]'");
						$jmldata = mysql_num_rows($semua);
						$jmlhal	 = ceil($jmldata/$batas);	
						$sebelumnya = $hal - 1;
						$berikutnya = $hal + 1;
	
					echo "<br><div class='paging'>";
	
					if($hal > 1){
							echo "<span class='btn btn-warning'><a  href='?tampil=bukudos&hal=1'> Pertama</a></span> ";
							echo "<span class='btn btn-warning'><a href='?tampil=bukudos&hal=$sebelumnya'> Sebelumnya</a></span> ";
					}else{
							echo "<span class='btn btn-warning'> Pertama</span> ";
							echo "<span class='btn btn-warning'> Sebelumnya</span> ";
							}
	
						for($i=1; $i<=$jmlhal; $i++){
						if($i == $hal) echo "<span class='btn btn-warning'> <b>$i</b> </span> ";
						else echo "<span class='btn btn-warning'><a href='?tampil=bukudos&hal=$i'> $i </a></span> ";
						}
	
						if($hal < $jmlhal){
						echo "<span class='btn btn-warningt'><a href='?tampil=bukudosl&hal=$berikutnya'> Berikutnya </a></span> ";
						echo "<span class='btn btn-warning'><a href='?tampil=bukudos&hal=$jmlhal'> Terakhir </a></span> ";
						}else{
							echo "<span class='btn btn-warning'> Berikutnya </span> ";
							echo "<span class='btn btn-warning'> Terakhir </span> ";		
							}
	
						echo "</div><br>";
				?>
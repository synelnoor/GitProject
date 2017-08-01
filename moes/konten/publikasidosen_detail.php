<?php
	if(!defined("INDEX")) die("---");
	$dosen = mysql_query("select * from dosen where id_dosen='$_GET[id]'") or die(mysql_error());
	$data  	= mysql_fetch_array($dosen);
	$namadosen = $data['namadosen'];
?>


	<ul class="breadcrumb">
		<li>Home</li>
		<li >Publikasi dosen</li>
		<li class="active" ><?php echo $data['namadosen']; ?></li>
	</ul>

 <ul class="nav nav-tabs">
		<li class="active"><a href="#konten1" data-toggle="tab">Jurnal</a></li>
		<li><a href="#konten2" data-toggle="tab">Buku</a></li>
		<li><a href="#konten3" data-toggle="tab">Penelitian</a></li>
		<li><a href="#konten4" data-toggle="tab">Dokumen</a></li>
		
</ul>
<div class="tab-content">
		<div class="tab-pane fade in active" id="konten1">
			<ul>


				<?php 
				$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
				$batas	= 3;
				$posisi = ($hal-1) * $batas ;

					$jurnal = mysql_query("select * from jurnal where id_dosen='$_GET[id]'")or die(mysql_error());
					while($data 	= mysql_fetch_array($jurnal)){
					$isi = substr($data['isi'],0,2500);
					$isi = substr($data['isi'],0,strrpos($isi," "));
				?>
				<div  class="jurnal">
					
					
					<h1><?php echo $data['judul']; ?></h1>
					<div class="col-md-4">
									<?php if($data['gambar']!="") ?> <img src="gambar/jurnal/<?php echo $data['gambar']; ?>" class="thumbnail" width="100%" height="150px">
					</div>
					<div class="row">
						<div class="col-md-8">							
								
								<h1>Abstrak</h1>
								<p> <?php echo $isi; ?> ... <p>
								
											
								<p><a href="konten/download_jur.php?file=<?php echo $data['pdf'];?>" class="btn btn-warning btn-xs">Download >></a></p>
								<p><a href="konten/preview_jur.php?file=<?php echo $data['pdf'];?>"  class="btn btn-primary btn-xs">Preview  >></a> </p>
								
						</div>
					</div>
				</div>
				<?php 
						}
						$semua = mysql_query("select * from jurnal where id_dosen='$_GET[id]'");
						$jmldata = mysql_num_rows($semua);
						$jmlhal	 = ceil($jmldata/$batas);	
						$sebelumnya = $hal - 1;
						$berikutnya = $hal + 1;
	
					echo "<br><div class='paging'>";
	
					if($hal > 1){
							echo "<span class='btn btn-warning'><a  href='?tampil=publikasidosen_detail&hal=1'> Pertama</a></span> ";
							echo "<span class='btn btn-warning'><a href='?publikasidosen_detail&hal=$sebelumnya'> Sebelumnya</a></span> ";
					}else{
							echo "<span class='btn btn-warning'> Pertama</span> ";
							echo "<span class='btn btn-warning'> Sebelumnya</span> ";
							}
	
						for($i=1; $i<=$jmlhal; $i++){
						if($i == $hal) echo "<span class='btn btn-warning'> <b>$i</b> </span> ";
						else echo "<span class='btn btn-warning'><a href='?tampil=publikasidosen_detail&hal=$i'> $i </a></span> ";
						}
	
						if($hal < $jmlhal){
						echo "<span class='btn btn-warningt'><a href='?tampil=publikasidosen_detail&hal=$berikutnya'> Berikutnya </a></span> ";
						echo "<span class='btn btn-warning'><a href='?tampil=publikasidosen_detail&hal=$jmlhal'> Terakhir </a></span> ";
						}else{
							echo "<span class='btn btn-warning'> Berikutnya </span> ";
							echo "<span class='btn btn-warning'> Terakhir </span> ";		
							}
	
						echo "</div><br>";
				?>
			</ul>
		</div>
		<div class="tab-pane fade" id="konten2">
			<ul>
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
							echo "<span class='btn btn-warning'><a  href='?tampil=publikasidosen_detail&hal=1'> Pertama</a></span> ";
							echo "<span class='btn btn-warning'><a href='?publikasidosen_detail&hal=$sebelumnya'> Sebelumnya</a></span> ";
					}else{
							echo "<span class='btn btn-warning'> Pertama</span> ";
							echo "<span class='btn btn-warning'> Sebelumnya</span> ";
							}
	
						for($i=1; $i<=$jmlhal; $i++){
						if($i == $hal) echo "<span class='btn btn-warning'> <b>$i</b> </span> ";
						else echo "<span class='btn btn-warning'><a href='?tampil=publikasidosen_detail&hal=$i'> $i </a></span> ";
						}
	
						if($hal < $jmlhal){
						echo "<span class='btn btn-warningt'><a href='?tampil=publikasidosen_detail&hal=$berikutnya'> Berikutnya </a></span> ";
						echo "<span class='btn btn-warning'><a href='?tampil=publikasidosen_detail&hal=$jmlhal'> Terakhir </a></span> ";
						}else{
							echo "<span class='btn btn-warning'> Berikutnya </span> ";
							echo "<span class='btn btn-warning'> Terakhir </span> ";		
							}
	
						echo "</div><br>";
				?>
			</ul>
		</div>
		<div class="tab-pane fade" id="konten3">
			<ul>
				<?php 
					$hal 	= isset($_GET['hal']) ? $_GET['hal'] : 1;
					$batas	= 3;
					$posisi = ($hal-1) * $batas ;
					$penelitian = mysql_query("select * from penelitian where id_dosen='$_GET[id]'")or die(mysql_error());
					while($data 	= mysql_fetch_array($penelitian)){
					$isi = substr($data['isi'],0,2500);
					$isi = substr($data['isi'],0,strrpos($isi," "));
				?>
				<div  class="penelitian">
					
					
					<h1><?php echo $data['judul']; ?></h1>
					<div class="col-md-4">
									<?php if($data['gambar']!="") ?> <img src="gambar/penelitian/<?php echo $data['gambar']; ?>" class="thumbnail" width="100%" height="150px">
					</div>
					<div class="row">
						<div class="col-md-8">							
								
								<h1>Deskripsi</h1>
								<p> <?php echo $isi; ?> ... <p>
								<p><a href="konten/download_pen.php?file=<?php echo $data['pdf'];  ?>" class="btn btn-warning btn-xs">Download >></a><p>
								<p><a href="konten/preview_pen.php?file=<?php echo $data['pdf'];?>"  class="btn btn-primary btn-xs">Preview  >></a> </p>
						</div>
					</div>
				</div>
				<?php 
						}
						$semua = mysql_query("select * from penelitian where id_dosen='$_GET[id]'");
						$jmldata = mysql_num_rows($semua);
						$jmlhal	 = ceil($jmldata/$batas);	
						$sebelumnya = $hal - 1;
						$berikutnya = $hal + 1;
	
					echo "<br><div class='paging'>";
	
					if($hal > 1){
							echo "<span class='btn btn-warning'><a  href='?tampil=publikasidosen_detail&hal=1'> Pertama</a></span> ";
							echo "<span class='btn btn-warning'><a href='?publikasidosen_detail&hal=$sebelumnya'> Sebelumnya</a></span> ";
					}else{
							echo "<span class='btn btn-warning'> Pertama</span> ";
							echo "<span class='btn btn-warning'> Sebelumnya</span> ";
							}
	
						for($i=1; $i<=$jmlhal; $i++){
						if($i == $hal) echo "<span class='btn btn-warning'> <b>$i</b> </span> ";
						else echo "<span class='btn btn-warning'><a href='?tampil=publikasidosen_detail&hal=$i'> $i </a></span> ";
						}
	
						if($hal < $jmlhal){
						echo "<span class='btn btn-warningt'><a href='?tampil=publikasidosen_detail&hal=$berikutnya'> Berikutnya </a></span> ";
						echo "<span class='btn btn-warning'><a href='?tampil=publikasidosen_detail&hal=$jmlhal'> Terakhir </a></span> ";
						}else{
							echo "<span class='btn btn-warning'> Berikutnya </span> ";
							echo "<span class='btn btn-warning'> Terakhir </span> ";		
							}
	
						echo "</div><br>";
				?>
			</ul>
	
		</div>
		<div class="tab-pane fade" id="konten4">
			<ul>
			<?php 
					$dokumen = mysql_query("select * from dokumen where id_dosen='$_GET[id]'")or die(mysql_error());
					while($data 	= mysql_fetch_array($dokumen)){
					
				?>
				<div  class="dokumen">
					
					
					<h1><?php echo $data['judul']; ?></h1>
					
					<div class="row">
						<div class="col-md-8">							
								
								
								<p><a href="konten/download_dok.php?file=<?php echo $data['pdf'];  ?>" class="btn btn-warning btn-xs">Download >></a><p>
						</div>
					</div>
				</div>
				<?php 
						}
				?>
			</ul>
		</div>
		
		
</div>
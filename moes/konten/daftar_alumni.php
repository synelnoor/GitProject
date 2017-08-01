<?php
if(!defined("INDEX")) die("---");
?>


<ul class="breadcrumb">
    <li>Beranda</li>
    <li>Alumni</li>
    <li class="active">Daftar Alumni</li>
</ul>

<h3>DAFTAR NAMA ALUMNI FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</h3>
<h2 class="sub-header">Data Alumni</h2>


<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Tahun</th>
		
		
		
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM lulusan ORDER BY tahun") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['nim']; ?> </td>
		<td> <?php echo $data['nama']; ?> </td>
		<td> <?php echo $data['tahun']; ?> </td>
		
		
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
</div>
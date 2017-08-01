<?php
if(!defined("INDEX")) die("---");
?>


<ul class="breadcrumb">
    <li>Beranda</li>
    <li class="active">Organisasi Fakultas</li>
</ul>

<h3>STRUKTUR ORGANISASI FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</h3>
<div class="Ofakultas">
		
				
			<img src="css/img/struktur.jpg" class="thumbnail" width="100%">
				
		
</div>

<h2 class="sub-header">Data Organisasi</h2>


<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Jabatan</th>
		
		
		
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM organisasi ORDER BY urutan") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['nama']; ?> </td>
		<td> <?php echo $data['jabatan']; ?> </td>
		
		
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
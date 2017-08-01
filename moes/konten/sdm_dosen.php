<?php
if(!defined("INDEX")) die("---");
?>


<ul class="breadcrumb">
    <li>Beranda</li>
    <li>SDM</li>
    <li class="active">Dosen</li>
</ul>

<h3>DAFTAR NAMA DOSEN FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</h3>
<h2 class="sub-header">Data Organisasi</h2>


<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Pangkat</th>
		<th>Pendidikan</th>
		
		
		
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM dosen ORDER BY pendidikan desc") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['namadosen']; ?> </td>
		<td> <?php echo $data['pangkat']; ?> </td>
		<td> <?php echo $data['pendidikan']; ?> </td>
		
		
	</tr>
	
	<?php 
			$no++;
		} 
	?>
	
</table>
</div>
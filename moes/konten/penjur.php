<?php
if(!defined("INDEX")) die("---");
?>


<ul class="breadcrumb">
    <li>Beranda</li>
    <li>Penelitian & Pengabdian</li>
    <li class="active">Jurnal(Nasional/Internasional)</li>
</ul>

<h3>JURNAL (NASIONAL/INTERNASIONAL) FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</h3>
<h2 class="sub-header">JURNAL ADMINISTRASI NEGARA </h2>


<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th> No</th>
		<th> Judul</th>
		
		
		
		
		
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM jurnalan") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		
		<td> <a  href="pdf/jurnalan/<?php echo $data['pdf']; ?>" title="<?php echo $data['judul']; ?>"><?php echo $data['judul']; ?></a> </td>
		
		
		
		
	</tr>
	
	<?php 
			$no++;
		} 
	?>

	
</table>
</div>

<h2 class="sub-header">JURNAL HUBUNGAN INTERNASIONAL</h2>


<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th> No</th>
		<th> Judul</th>
		
		
		
		
		
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM jurnalhi") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		
		<td> <a  href="pdf/jurnalhi/<?php echo $data['pdf']; ?>" title="<?php echo $data['judul']; ?>"><?php echo $data['judul']; ?></a> </td>
		
		
		
		
	</tr>
	
	<?php 
			$no++;
		} 
	?>

	
</table>
</div>

<h2 class="sub-header">JURNAL DOSEN</h2>


<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th> No</th>
		<th> Judul</th>
		
		
		
		
		
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM jurnal") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		
		<td> <a  href="pdf/jurnal/<?php echo $data['pdf']; ?>" title="<?php echo $data['judul']; ?>"><?php echo $data['judul']; ?></a> </td>
		
		
		
		
	</tr>
	
	<?php 
			$no++;
		} 
	?>

	
</table>
</div>

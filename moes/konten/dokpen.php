<?php
if(!defined("INDEX")) die("---");
?>


<ul class="breadcrumb">
    <li>Beranda</li>
    <li>Penelitian & Pengabdian</li>
    <li class="active">Dokumen Penelitian</li>
</ul>

<h3>DOKUMEN PENELITIAN  & PENGABDIAN FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</h3>
<h2 class="sub-header">DOKUMEN PENELITIAN</h2>


<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th> No</th>
		<th> Judul</th>
		
		
		
		
		
	</tr>
	
	<?php
		$no=1;
		$tampil = mysql_query("SELECT * FROM dokumen") or die(mysql_error());
		while($data=mysql_fetch_array($tampil)){
			
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		
		<td> <a  href="pdf/dokumen/<?php echo $data['pdf']; ?>" title="<?php echo $data['judul']; ?>"><?php echo $data['judul']; ?></a> </td>
		
		
		
		
	</tr>
	
	<?php 
			$no++;
		} 
	?>

	
</table>
</div>

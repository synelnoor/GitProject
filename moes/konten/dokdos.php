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
		<li>Dokumen Dosen</li>
</ul>





	<div class="table-responsive"> 
	<table class="table table-striped">
	<tr>
		<th> No</th>
		<th> Judul</th>
		
		
		
		
		
	</tr>
	
	<?php
		$no=1;
		$dokumen = mysql_query("select * from dokumen where id_dosen='$_GET[id]'")or die(mysql_error());
		while($data = mysql_fetch_array($dokumen)){
			
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
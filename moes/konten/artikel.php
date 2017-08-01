<?php
	if(!defined("INDEX")) die("---");

	$artikel = mysqli_query($koneksi,"SELECT * FROM artikel ORDER BY id_artikel DESC ");
	while ($data = mysqli_fetch_array($artikel)) {
		$isi = substr($data['isi'],0,300);
		$isi = substr($data['isi'],0,strrpos($isi," "));
?>

<div class="artikel">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
           <?php if($data['gambar']!="") ?> <img class="img-circle" src="gambar/artikel/<?php echo $data['gambar']; ?>" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h3><?php echo $data['judul']; ?></h3>
          <p><?php echo $isi; ?> ... </p>
          <p><a class="btn btn-warning" href="?tampil=artikel_detail&id=<?php echo $data['id_artikel']; ?>" role="button">Baca Selanjutnya &raquo;</a></p>
        </div><!-- /.col-lg-4 -->  
      </div><!-- /.row -->
     </div>
  <?php
}
	?>
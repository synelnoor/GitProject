<?php
  if(!defined("INDEX")) die("---");
  
  include "konten/slideshow.php";
  
  $hal  = isset($_GET['hal']) ? $_GET['hal'] : 1;
  
  $batas  = 3;
  $posisi = ($hal-1) * $batas ;
  
  $artikel = mysqli_query("select * from artikel order by id_artikel desc limit $posisi, $batas");
  while($data=mysqli_fetch_array($artikel)){
    $isi = substr($data['isi'],0,200);
    $isi = substr($data['isi'],0,strrpos($isi," "));
?>
 
  <div class="artikel">
   
      <div class="col-lg-4">
       
        <?php if($data['gambar']!="") ?> <img src="gambar/artikel/<?php echo $data['gambar']; ?>" class="img-circle" alt="Generic placeholder image" style="width: 140px; height: 140px;">
        <h3 class="judul"><?php echo $data['judul']; ?></h3>
        <p><?php echo $isi; ?> ... </p>
        <p><a href="?tampil=artikel_detail&id=<?php echo $data['id_artikel']; ?>" class="btn btn btn-warning btn-xs">Selengkapnya >></a></p>

      </div>
   
  </div>
 
  
<?php
  }
 
  
?>
   



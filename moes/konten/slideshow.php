<link rel="stylesheet" type="text/css" href="plugin/nivoslider/nivo-slider.css">
<script type="text/css" src="plugin/nivoslider/jquery.nivo.slider.css"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('#mycarousel').nivoSlider();
    });
  </script>


	<div id="mycarousel" class="carousel slider"  >

 
<?php
  if(!defined("INDEX")) die("---"); 
?>
<!--indikator-->
  <ol class="carousel-indicators">
  <?php
    $artikel = mysqli_query("select * from artikel order by id_artikel desc limit 4");
    $no=0;
    while($data=mysqli_fetch_array($artikel)){
  ?>
    <li data-target="#mycarousel" data-slide-to="<?php echo $no; ?>"
      <?php if($no == 0) echo ' class="active"'; ?>
    > </li>
  <?php
      $no++;
    } 
  ?>
  </ol>
   <!--wrapper untuk slide-->
  <div class="carousel-inner">
  <?php
    $artikel = mysqli_query("select * from artikel order by id_artikel desc limit 4");
    $no=0;
    while($data=mysqli_fetch_array($artikel)){
      $isi = substr($data['isi'],0,300);
      $isi = substr($data['isi'],0,strrpos($isi," "));
  ?>
    <div class="item <?php if($no == 0) echo ' active'; ?>">
      <img src="gambar/artikel/<?php echo $data['gambar']; ?>" width="100%" height="50px">  
    </div>
  <?php
      $no++;
    }
  ?>
  </div>
   <!--control-->
  <a class="left carousel-control" href="#mycarousel"  data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#mycarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>

<script type="text/css" src="plugin/nivoslider/jquery.nivo.slider.css"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#mycarousel').nivoSlider();
    });
    </script>
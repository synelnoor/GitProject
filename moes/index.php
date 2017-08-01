<?php
	session_start();
	
	include("lib/koneksi.php");
	include("lib/fungsi_tglindonesia.php");
	define("INDEX",true);
?>

<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FISIP</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<!--scriptnavigasi-->
	<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push([&quot;_setAccount&quot;,46850]);var n=e.location.protocol==&quot;https:&quot;?&quot;https:&quot;:&quot;http:&quot;;var r=document.createElement(&quot;script&quot;);r.type=&quot;text/javascript&quot;;r.async=true;r.src=n+&quot;//static.subiz.com/public/js/loader.js&quot;;var i=document.getElementsByTagName(&quot;script&quot;)[0];i.parentNode.insertBefore(r,i)}(window);
  </script>
  <!--nav-->
  
  
 
</head>
<body>
	
<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php include("header.php"); ?>
			</div>
		</div>
	</div>
</div>

<diV id="menu">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php include("menu.php"); ?>
			</div>
		</div>
	</div>
</diV>

<div id="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php include("konten.php"); ?>
			</div>
		</div>
	</div>
</div>

<div id="pengumuman">
	<div class="container">
		<div class="row">
			
				<div class="col-md-8">
				<h3>INFORMASI TERKINI</h3>
				<?php include ("berita.php");?>
				</div>
				<div class="col-md-4">
				<?php include("sidebar.php"); ?>
				</div>
			
		</div>
	</div>
</div>



<div id="prafooter">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php include("prafooter.php"); ?>
			</div>
		</div>
	</div>
</div>

<div id="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p>Copyright &copy; FISIP UNIVERSITAS PROF.DR.MOESTOPO(BERAGAMA) </p>
			</div>
		</div>
	</div>
</div>


<!--script-->

	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>

	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<!--navigasiscript-->
	<script type='text/javascript'>
//<![CDATA[
$(document).ready(function() {
    // Menentukan elemen yang dijadikan sticky yaitu .nav
    var stickyNavTop = $('#menu').offset().top; 
    var stickyNav = function(){
        var scrollTop = $(window).scrollTop();  
        // Kondisi jika discroll maka menu akan selalu diatas, dan sebaliknya        
        if (scrollTop > stickyNavTop) { 
            $('#menu .col-md-12').css({ 'position': 'fixed', 'top':0, 'z-index':9999 });
        } else {
            $('#menu .col-md-12').css({ 'position': 'relative','left':0 });
        }
    };
    // Jalankan fungsi
    stickyNav();
    $(window).scroll(function() {
        stickyNav();
    });
});
//]]>
</script>
<script type='text/javascript'>
//<![CDATA[
$(document).ready(function(){ 
 var touch  = $('#resp-menu');
 var menu  = $('.menu');
 
 $(touch).on('click', function(e) {
  e.preventDefault();
  menu.slideToggle();
 });
 
 $(window).resize(function(){
  var w = $(window).width();
  if(w > 767 && menu.is(':hidden')) {
   menu.removeAttr('style');
  }
 });
 
});
//]]>
</script>

</body>
</html>
</body>
</html>
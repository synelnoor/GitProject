<?php
$name= $_SERVER['DOCUMENT_ROOT'].'/moes/pdf/buku/'.$_GET['file'];




  
 
  header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename='.basename($name));
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes');
  @readfile($name);

?>


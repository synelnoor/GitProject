<?php
$name= $_SERVER['DOCUMENT_ROOT'].'/moes/pdf/jurnal/'.$_GET['file'];



header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename='.basename($name));
header('Content-length: ' . filesize($name));
header("Content-Transfer-Encoding: binarynn");

header("Pragma: no-cache");
header("Expires: 0");


// It will be called downloaded.pdf

readfile($name);
// The PDF source is in original.pdf


?>
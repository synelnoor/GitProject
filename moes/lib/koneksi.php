<?php
	$host	= "localhost";
	$user	= "root";
	$pass	= "";
	$db		= "moes";
	
	$kon=mysqli_connect($host,$user,$pass) or die(mysqli_error());
	mysqli_select_db($kon,$db) or die(mysqli_error());
?>
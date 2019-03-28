<?php
	$val = $_GET['val'];
	
	$file = fopen("tempfile.php", "w");
	fwrite($file,$val);
	fclose($file);
	
	include 'tempfile.php';
?>
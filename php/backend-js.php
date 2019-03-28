<?php
	$val = $_GET['val'];
	
	$file = fopen("tempfilejs.js", "w");
	fwrite($file,$val);
	fclose($file);
	
	echo "<script>".$val."</script>";
?>
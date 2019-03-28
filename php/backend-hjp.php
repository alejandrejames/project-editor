<?php
	$val = $_GET['val'];
	
	$file = fopen("tempfilehjp.php", "w");
	fwrite($file,$val);
	fclose($file);
	
	echo '<iframe src="php/tempfilehjp.php" style="width: 100%; height: 400px; overflow: auto;" frameBorder="0"></iframe>';
?>
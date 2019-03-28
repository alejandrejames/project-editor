<?php
$name= $_GET['val'];
$num = strlen($name);
if($name[$num-1]=='s' && $name[$num-2]=='j')
    $name2 = "JS FILE-".date("Y-m-d h:i:sa").".js";
else    
    $name2 = "PHP FILE-".date("Y-m-d h:i:sa").".php";

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($name2).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($name));
    readfile($name);
    exit;
?>
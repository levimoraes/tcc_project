<?php 

// get contents of a file into a string
$filename = "../metricas.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
echo $contents;
fclose($handle);

?>
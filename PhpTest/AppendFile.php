<?php


$file="Append.txt";

$handle= fopen($file, "a");
$data ="This is first line data";
fwrite($handle, $data);
$data1="This is Secound line data";
fwrite($handle,$data1);
fclose($handle);


?>
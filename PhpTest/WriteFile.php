<?php
$file="Sample.txt";
$handle=fopen($file, "w");
$info="This is sample for write a file";
fwrite($handle, $info);
?>
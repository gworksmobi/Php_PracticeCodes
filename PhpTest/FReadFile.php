<?php
$file = fopen("array.php", "r");
echo fread($file, filesize("array.php"));
fclose($file);
?>
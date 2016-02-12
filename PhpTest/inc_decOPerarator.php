<?php 

echo '== Alphabets ==' . PHP_EOL;
$s = 'A';
for ($n=0; $n<6; $n++) {
	echo ++$s . PHP_EOL;
}

echo '== Digits ==' . PHP_EOL;
$d = 'A8';
for ($n=0; $n<6; $n++) {
	echo ++$d . PHP_EOL;
}

$d = 'A08';
for ($n=0; $n<6; $n++) {
	echo ++$d . PHP_EOL;
}

?>

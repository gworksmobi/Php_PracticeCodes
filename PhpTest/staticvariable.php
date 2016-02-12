<?php

function test()
{
	static $var=10;
	echo $var;
	$var++;
	
}
test();
test();
test();

print "\n";

function foo(){
	static $int = 0;          // correct

	$int++;
	echo $int;
}
echo $int;
foo();
foo();
foo();
?>
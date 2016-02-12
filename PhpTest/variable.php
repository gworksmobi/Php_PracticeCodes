<?php

$name="Rajkumar";
$place="Chennai";
$num=10;
$float=10.5;

Echo "$name\t$place $num $float";


#global & local

$x=10; $y=20;
function EXglobal(){
	
	global $x, $y;
	$y=$x+$y;
}
EXglobal();
  
  print "\nThis is global Variable Result: $y";
?>
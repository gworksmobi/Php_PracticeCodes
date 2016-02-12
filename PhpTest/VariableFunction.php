<?php

function Variable()
{
	echo "this is variable Function call var variable"."\n";
	
}

function FunctionEX($str)
{
	print "Function Example to call fun variable--> "  .  $str;
	
}

$var='Variable';
$var();

$fun='FunctionEX';
$fun("Variable Function Concepts");
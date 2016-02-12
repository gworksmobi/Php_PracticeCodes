<?php

function method1(&$str1)
{
	$str1.="Come to Rajkumar Brain";
}

$str="Hello Php ";
method1($str);
print $str;

?>
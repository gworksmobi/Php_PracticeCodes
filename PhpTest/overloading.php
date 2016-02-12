<?php
class overloading
{
	function method($var)
	{
		print $var."\n";
	}
	function method($var,$var1)
	{
	  $result = $var +$var1;
	  print $result."\n";
	}
	function method($var, $var1, $var2)
	{
	   $result= $var . $var1 . $var2;
	   print $result."\n";
	}
	function method($var, $var1, $var2, $var3)
	{
		$result = $var +$var1+$var2;
		print $result. $var3."\n";
	}
	function method($var, $var1, $var2,$var3,$var4)
	{
		$result = $var +$var1+$var2+$var3+$var4;
		print $result."\n";
	}
	
}
$obj=new overloading();
$obj->method("This is Method Overloading Example");
$obj->method(10,12);
$obj->method("Hello", "Php", "Come to Rajkumar Brain");
$obj->method(10,11,13,"thrid method");
$obj->method(10,11,12,13,15);
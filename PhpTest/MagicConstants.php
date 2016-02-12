<?php
class Magic
{
	function methodsample()
	
	{
		print __FUNCTION__;
		print "\n";
		print __LINE__;
		print "\n";
		
	}
	function method1()
	{
		print __METHOD__;
		print "\n";
		print __CLASS__;
		print "\n";
		print __DIR__;
		print "\n";
		print __FILE__;
		print "\n";
		print __LINE__;
		print "\n";
		print __NAMESPACE__;
		print "\n";
	}
	
}
$obj=new Magic();
$obj->method1();
$obj->methodsample();
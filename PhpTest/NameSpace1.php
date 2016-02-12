<?php
namespace raj;
class NameSpace1
{
	
	
	function method()
	{
		print "this is name space Test"."\n";
		
	}
	function method1()
	{
		print "This is method1 NameSpace Test"."\n";
		
	}
}

$name =new NameSpace1();

$name-> method();
$name->method1();

<?php
interface InterfaceTest
{
	public function method1();
	public function method2();
}

class ClassTest implements InterfaceTest
{
	public function method1()
	{
		print "\nThis is method1 Result";
	}
	
	public function method2()
	{
		print "\nThis is method2 Result";
	}
	
	public function method3()
	{
		print "\nThis is method3 Result";
	}
}

$obj =new ClassTest();
$obj->method1();
$obj->method2();
$obj->method3();

?>
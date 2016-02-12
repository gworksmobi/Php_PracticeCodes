<?php
class A
{
	const CONST_VALUE ='Rajkumar';
	
	public function method()
	{
		print self::CONST_VALUE."Self Result"."\n"; // with in class means use Self
	}
	
}

class B extends A{
	
	public function method1()
	{
		print parent::CONST_VALUE."Parent Result"."\n"; // out side of class use parent
	}
}	

$obj = new B();
$obj->method();
$obj->method1();

?>


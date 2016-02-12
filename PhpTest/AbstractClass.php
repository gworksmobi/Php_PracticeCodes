<?php
 abstract class AbstractClass
 {
 	abstract protected function method1();
 	abstract protected function method2();
 	
 	public function CommonMethod()
 	{
 		print "\nThis Is Common method";
 	}
 }
 
 class DerivedClass extends AbstractClass
 {
 	public function method1()
 	{
 	   print "\nThis is method1 Result";	
 	}
 	public function method2() 
 	{
       print "\nThis is method2  Result";
 	}
 	
 	public function method3()
 	{
 		print "\nThis is method3 Result";
 	}
 }
 
 $obj=new DerivedClass();
 $obj->CommonMethod();
 $obj->method1();
 $obj->method2();
 $obj->method3();
 ?>
 
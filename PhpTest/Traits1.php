<?php
class parent_class
{
public function sayHello1()
{
echo "say hello from base"."\n";
}
}
trait trt
{
public function sayHello2()
{
echo "say hellow from trt"."\n";
}
}
class main_child extends parent_class
{
use trt;
public function sayHello()
{
echo "hello from main child class"."\n";
}
}
$objCls = new main_child();
$objCls->sayHello();
$objCls->sayHello1();
$objCls->sayHello2();

?>
<?php

trait TraitsClass
{
	public function method()
	{
		print "Calling Traits Functions";
	}
}

class TraitsExample
{
    use TraitsClass;
}

$obj=new TraitsExample();
$obj->method();

?>


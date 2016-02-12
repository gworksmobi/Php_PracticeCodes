<?php
final class FinalClassTest
{
	public function method()
	{
		print "This is FinalClass Test";
	}
}

class SubFinalClass extends FinalClassTest
{
	public function method(){
		print "This is sub Class Test";
	}
	
	
}

$obj = new FinalClassTest();
$obj-> method();
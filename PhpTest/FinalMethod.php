<?php
class FinalTest
{
	final public function method()
	{
		print "This is Final Method";
	}
}
class SubFinalTest extends FinalTest
{
	public function method()
	{
		print "This is Sub Class Method";
		
	}
}

 $obj=new SubFinalTest();
 $obj-> method();
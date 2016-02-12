<?php
class ObjectIteration
{
	public $a=10;
	public $b=20;
	public $name="Result";
	
	private $private="Private";
	
	public function method()
	{
		foreach($this as $key => $value)
		{
			print "$key => $value"."\n";
		}
	}
}

$class = new ObjectIteration();

foreach($class as $key => $value)
{
	print "$key => $value"."\n";
}

$class-> method();

?>
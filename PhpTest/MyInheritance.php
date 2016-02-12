<?php

class super
{
	public $name;
	public $place;
	
    public  function supermethod()
	{
		print "\nThis is super class method\n";
		return "name='$this->name' place='$this->place'";
	}
}

class sub extends super{
	
	public function __construct($name, $place)
	{
		$this->name=$name;
		$this->place=$place;
	}
	public function submethod()
	{
	   print "\nThis is Sub Class method";	
	   $result= $this->supermethod();
	   print $result;
	}
}

$subobj =new sub("Rajkumar", "Chennai");
#$subobj->supermethod();
$subobj->submethod();

?>
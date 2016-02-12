<?php

function outer()
{
	print "Outer function. \n";
	
	function inner()
	{
		print "Inner Function. \n";
		
	}
}
outer();
inner();
?>
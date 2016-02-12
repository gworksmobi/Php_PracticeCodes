<?php

function DefaultMethod($this ="default")
{
	print "this is ".$this . "\n";
}
DefaultMethod();
DefaultMethod(null);
DefaultMethod("USER PASSED VALUE");

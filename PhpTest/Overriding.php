<?php
class Super
{
   function display()
   {
   	 print "Super Class\n";
   }
}
class SubClass extends Super
{
   function display()
   {
   	parent::display();
   	 print "Sub Class";
   }
}

$obj =new SubClass();
$obj->display();
?>
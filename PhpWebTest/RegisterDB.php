<?php
#include "Register.php";
$server="localhost";
$username="root";
$password="gworks.mobi2";
$dbname ="Gworks";


$conn=new mysqli($server, $username, $password,$dbname);

if($conn ->connect_error)
{
	die("Connection Failed" .$conn-> connect_error);
}

print "Connection Suucessfully";

$name =$_POST['name'];
print ($name);
print "<br/>";
$email =$_POST['email'];
print ($email);
print "<br/>";
$pass  =$_POST['pass'];
print ($pass);
print "<br/>";
$position=$_POST['position'];
print ($position);
print "<br/>";
$place=$_POST['place'];
print ($place);
print "<br/>";

if(mysql_select_db($dbname))
{
	die("Unable to select database: " . mysql_error());
}
print "Db selected Successfully";
print "<br/>";

$sql="insert into testing(Name,Email,Password,Postion,Place)values('$name', '$email', '$pass','$position', '$place')";
print $sql;

#$result=mysql_query($sql, $conn);
#$result= $conn->query($sql);
#print "Result $result";

#print "result";

if($result= $conn->query($sql)== true){
	print "successfully insert values in databases";
	header('Location: Login.php');
}
	else{
		print "enter your values correcctly.";
		#header('Location: Register.php');
	}
	$conn->close();
	print "Connection Colsed successfully";
	?>
	
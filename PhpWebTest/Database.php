<?php
#include "Login.php";
$server="localhost";
$username="root";
$password="gworks.mobi2";
$dbname ="Gworks";



$conn = new mysqli($servername, $username, $password,$dbname);

if($conn ->connect_error)
{
	die("Connection Failed" .$conn-> connect_error);
}
print "Db Connected Successfully";
print "<br/>";

if(mysql_select_db($dbname))
{
	die("Unable to select database: " . mysql_error());
}
print "Db selected Successfully";
print "<br/>";

$email =$_POST['email'];
print ($email);
print "<br/>";
$pass  =$_POST['pass'];
print ($pass);
print "<br/>";

$sql= "select Email, Password from testing";
#$result= $conn->query($sql);
#print "Query Executeted";
#print "<br/>";

#$value = $result->num_rows;
#print $value;

if($result= $conn->query($sql))
{
	print "start in if(result)";
	$row_cnt = $result->num_rows;
	
	printf("Result set has %d rows.\n", $row_cnt);
	
	while($row = $result->fetch_assoc())
	{
		 print "with in while";
		 	$dbemail =$row["Email"]; 
		    $dbPass = $row["Password"]; 
			print $dbemail;
			print "<br/>";
			print $dbPass;
			
			
			if($email== $dbemail && $pass == $dbPass)
			{
				header('Location: Success.php');
			}
				
	}
	$conn->close();
	print "Connection Colsed successfully";
// 	header('Location: Error.php');
}
else{
	print "No record found";
}

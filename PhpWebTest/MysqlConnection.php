<?php
$servername = "localhost";
$username = "root";
$password = "gworks.mobi2";

// Create connection
#print "get the Username and Password";
$conn = new mysqli($servername, $username, $password);

#print "Connection Problem";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else
echo "Connected successfully";
?> 
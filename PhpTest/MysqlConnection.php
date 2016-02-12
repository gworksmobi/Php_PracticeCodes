<?php
$servername = "localhost";
$username = "root";
$password = "gworks.mobi2";

// Create connection
$conn = new mysqlnd($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
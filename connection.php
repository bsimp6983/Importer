<?php
$servername = "mysql16.000webhost.com";
$username = "a2906519_brandon";
$password = "zeke2413";
$database = "a2906519_mydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
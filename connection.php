<?php


/* old connection for mysql
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

attempted connection to mssql below*/

$servername = "THRIVEDCSDB\SQLEXPRESS";
$username = "brandon";
$password = "ThriveDC$";
$database = "dbo.DowntimeReason";
$conn = new COM ("ADODB.Connection")
  or die("Cannot start ADO");


//define connection string, specify database driver
 $connStr = "PROVIDER=SQLOLEDB;SERVER=".$servername.";UID=".$username.";PWD=".$password.";DATABASE=".$database; 
  $conn->open($connStr); 

?>

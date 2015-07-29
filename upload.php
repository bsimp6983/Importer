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
echo "<p>Connected successfully to Brandons database</p>";

 

 

if(isset($_POST['submit']))

{

    $file = $_FILES['file']['tmp_name'];

    $handle = fopen ($file,"r");

    while(($fileop = fgetcsv($handle,1000,",")) !==false){

        $first = $fileop[0];
        $last = $fileop[1];
        $birthday = $fileop[2];
        $age = $fileop[3];
        $address = $fileop[4];

$sql = mysqli_query($conn,"INSERT INTO `mytable` (first, last, birthday, age, address) VALUES ('$first','$last','$birthday','$age','$address')");
		$getdata =  "SELECT * FROM mytable";
		$results = mysqli_query($conn,$getdata);
      

    }//end while

 if(mysqli_num_rows($results) >=1)
 {
 echo "<table><tr><th>First</th><th>Last</th><th>Birthday</th><th>Age</th><th>Address</th></tr>";
while($row = mysqli_fetch_assoc($results))
{
echo "<tr><td>" . $row["first"]. "</td><td>" . $row["last"]. "</td><td>" . $row["birthday"]. "</td><td>" . $row["age"]. "</td><td>" . $row["address"]. "</td></tr>";

  
    
}//end while
echo "</table>";
    }//end if

   
     

if($sql)

    {

        echo "<p>Upload to Brandons database successful</p>";
      
    }//end if

mysqli_close($conn);
}
?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<title>Brandon Simpson's Upload</title>









<style type="text/css">
body {background: #E3F4FC;font: normal 14px/30px Helvetica, Arial, sans-serif;color: #2b2b2b;}
p{text-align:center;}
a{color:#898989;font-size:14px;font-weight:bold;text-decoration:none;}
a:hover {color:#CC0033;}
#container {background: #CCC;margin: 100px auto;width: 945px;}
#form{padding: 20px 150px;}
#form input{margin-bottom: 20px;}
table{text-align:center; margin-left:auto;margin-right:auto;}
td, th{border: 1px solid #CCC; font-family:tahoma;}
th{font-family:tahoma; background-color: #CCC; color: white; border: none;}
</style>

</head>

<body>

<div id="container">

<div id="form">


 <form method="post" action="upload.php" enctype="multipart/form-data">
 <input type="file" name="file" required /> 
  <input type="submit" name="submit" value="Submit" />
<a href="include.php" ><input type="button" value="CSV Download" /></a>
 </form>

<a href="http://testpage.uphero.com/brandon.csv" ><input type="button" value="CSV Download" /></a>
</div>
</div>

</body>
</html>
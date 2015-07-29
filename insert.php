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

//check if any fields are blank. If blank field exists kill script and throw error
 if(!isset($first) || trim($first) == '') 
{
   echo "First Name Field Empty";
   die();
}

if(!isset($last) || trim($last) == '')
{
   echo "Last Name Field Empty";
   die();
}

if(!isset($birthday) || trim($birthday) == '')
{
   echo "Birthday Field Empty";
   die();
}

if(!isset($age) || trim($age) == '')
{
   echo "Age Field Empty";
   die();
}

if(!isset($address) || trim($address) == '')
{
   echo "Address Field Empty";
   die();
}


 

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

   
     



mysqli_close($conn);
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>



<style type="text/css">
body {background: #E3F4FC;font: normal 14px/30px Helvetica, Arial, sans-serif;color: #2b2b2b;}
p{text-align:center;}
table{text-align:center; margin-left:auto;margin-right:auto;}
td, th{border: 1px solid #CCC; font-family:tahoma;}
th{font-family:tahoma; background-color: #CCC; color: white; border: none;}
</style>

</body>
</html>

   
     



mysqli_close($conn);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta charset="utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>



<style type="text/css">
body {background: #E3F4FC;font: normal 14px/30px Helvetica, Arial, sans-serif;color: #2b2b2b;}
p{text-align:center;}
table{text-align:center; margin-left:auto;margin-right:auto;}
td, th{border: 1px solid #CCC; font-family:tahoma;}
th{font-family:tahoma; background-color: #CCC; color: white; border: none;}
</style>

</body>
</html>
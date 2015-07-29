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

 
if(isset($_POST['Submit'])=="Upload")
  {
    $handle = fopen("c:../abbr_details.csv","r");
    $error = false; //flag to show whether there were errors or not
    $toWrite = array(); //array to store the values to write (so we don't loop through the file twice)
    
    while ($data = fgetcsv ($handle, 10000, ","))
        {

        $first = $fileop[0];
        $last = $fileop[1];
        $birthday = $fileop[2];
        $age = $fileop[3];
        $address = $fileop[4];

                   //ADDED THIS CODE
                   if (!$first || !$last || !$birthday || !$age || !$address) {
                         //an error has been found
                         $error = true;
						 echo 'Field Missing';
                         break;
                   }
                   
                else {
                    //no error so add the values to the array which we will use for writing
                    $toWrite[] = array($first, $last, $birthday, $age, $address);
                    
                }                

           }

        fclose ($handle);

    
}
if (!$error) { //if we have no errors..

foreach ($toWrite as $arr) {
//loop through the data to write and write each array
//extract the variables to save you rewriting your queries
list ($first, $last, $birthday, $age, $address) = $arr; 
$query = mysqli_query($conn,"SELECT * FROM mytable WHERE first='$first' and last='$last' and birthday='$birthday' and age='$age' and address='$address'") or die(mysqli_errno());
               if(mysql_num_rows($query) >= 1)
               {
               }
             else
                 {

               $query1 = "INSERT INTO mytable (first,last,birthday ,age, address) values ('".$first."','".$last."','".$birthday ."','".$age."','".$address."')";
                $result1 = mysqli_query($conn, $query1) or die('Query failed: ' . mysqli_errno());

               }
@mysqli_free_result($query);
}

$err_msg = '<p class="approve">Data is Inserted in the Database</p>';
}  


mysqli_close($conn);

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
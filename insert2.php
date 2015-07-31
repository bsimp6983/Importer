<?php
include once 'connection.php';



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






    
    }//end while

$sql = $conn->prepare("INSERT INTO `mytable` (first, last, birthday, age, address) VALUES ('$first','$last','$birthday','$age','$address')");
		$getdata =  "SELECT * FROM mytable";
		$results = mysqli_query($conn,$getdata);

if(mysqli_num_rows($results) >=1)
 {
	 $sql = mysqli_query($conn,"INSERT INTO `mytable` (first, last, birthday, age, address) VALUES ('$first','$last','$birthday','$age','$address')");
		$getdata =  "SELECT * FROM mytable";
		$results = mysqli_query($conn,$getdata);
    
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
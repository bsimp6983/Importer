<?php

include 'connection.php';

if(isset($_POST['submit']))
{
$empty_value_found = false;
$file = $_FILES['file']['tmp_name'];
$handle = fopen ($file,"r");
$toWrite = array();

while(($fileop = fgetcsv($handle,1000,",")) !==false){
  
    $Level1= trim($fileop[0]);
    $Level2= trim($fileop[1]);
    $Level3= trim($fileop[2]);
    $Client= trim($fileop[3]);
    $HideReasonInReports= trim($fileop[4]);
    $Line= trim($fileop[5]);
    $IsChangeOver= trim($fileop[6]);
    $Duration= trim($fileop[7]);





    if (
        empty($Level1) 
        || empty($Level2) 
        || empty($Level3) 
        || empty($Client) 
        || empty($HideReasonInReports) 
        || empty($Line) 
        || empty($IsChangeOver)
        || empty($Duration)  
    ) {
        $empty_value_found = true;
        echo "empty field please check";
        break; // stop our while-loop
    }
else{
	$toWrite[] = $fileop;

}


}

// now we check - if there no empty values

if (!$empty_value_found) {

foreach ($toWrite as $arr){

    $Level1= trim($fileop[0]);
    $Level2= trim($fileop[1]);
    $Level3= trim($fileop[2]);
    $Client= trim($fileop[3]);
    $HideReasonInReports= trim($fileop[4]);
    $Line= trim($fileop[5]);
    $IsChangeOver= trim($fileop[6]);
    $Duration= trim($fileop[7]);

list ($Level1, $Level2, $Level3, $Client, $HideReasonInReports, $Line, $IsChangeOver, $Duration) = $arr; 


 $sql = mysqli_query($conn,"INSERT INTO `mytable` (Level1, Level2, Level3, Client, HideReasonInReports, Line, IsChangeOver, Duration) VALUES ('$Level1','$Level2','$Level3','$Client','$HideReasonInReports','$Line','$IsChangeOver','$Duration')");
		$getdata =  "SELECT * FROM mytable";
		$results = mysqli_query($conn,$getdata);
   }
} 

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





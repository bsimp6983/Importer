<?php

include 'connection.php';

$getdata =  "SELECT * FROM mytable";
$results = mysqli_query($conn,$getdata);

echo "<table><tr><th>Level1</th><th>Level2</th><th>Level3</th><th>Client</th><th>HideReasonInReports</th><th>Line</th><th>IsChangeOver</th><th>Duration</th></tr>";
while($row = mysqli_fetch_assoc($results))
{
echo "<tr><td>" . $row["Level1"]. "</td><td>" . $row["Level2"]. "</td><td>" . $row["Level3"]. "</td><td>" . $row["Client"]. "</td><td>" . $row["HideReasonInReports"]. "</td><td>" . $row["Line"]. "</td><td>" . $row["IsChangeOver"]. "</td><td>" . $row["Duration"]. "</td></tr>";
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
table{text-align:center; margin-left:auto; margin-right:auto;}
td, th{border: 1px solid #CCC; font-family:tahoma;}
th{font-family:tahoma; background-color: #CCC; color: white; border: none;}
</style>

</body>
</html>
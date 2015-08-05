<?php
include 'connection.php';

$query1 = "DELETE * FROM mytable";
$result = mysqli_query($conn,$query1);

if(msqli_query($conn,$query1)){
	echo "records deleted"
}else{
	echo "error occurred" . mysqli_error($conn);
}
mysqli_close($conn);
?>
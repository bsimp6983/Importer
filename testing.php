
<?php include 'include.php';?>
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
<div id="container"><div id="form">
 <form method="post" action="insert.php" target="tablebox" enctype="multipart/form-data">
 <input type="file" name="file" required /> 
  <input type="submit" name="submit" value="Submit" /> </form> 
 <p>This page will show all sql data results when the page is loaded. I have kept two database entries within my database to show this functionality. When the user uploads a csv file, the table will be appended with the records added to MySQL database. Any commas in the csv file will break the code because it is comma delimited. Thank you!</p></div></div>
<iframe name="tablebox" src="show.php" width="100%" height="350px" frameBorder="0"  allowtransparency="true" >
</iframe>
</body>
</html>
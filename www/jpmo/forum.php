
<?php

$con=mysql_connect("localhost","root","cfg2014!");
echo mysql_error($con);
if(!$con)
echo "NO CONNECTION WITH DATABASE...";
mysql_select_db("CFG2014");
echo mysql_error($con);
$abc=$_POST['name'];


$sql1=mysql_query("insert into discuss(queries) values ('$_POST[post1]')");

echo mysql_error($con);
if(!$sql)
	echo "error in inserting...!";
else
	header("location:post.html");
mysql_close($con);
?>

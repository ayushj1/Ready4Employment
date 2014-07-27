
<?php
session_start();
$con=mysql_connect("localhost","root","cfg2014!");
echo mysql_error($con);
if(!$con)
echo "NO CONNECTION WITH DATABASE...";
mysql_select_db("CFG2014");
echo mysql_error($con);
$abc=$_SESSION['tn'];
$sql=mysql_query("insert into $abc(queries)values('$_POST[post1]')");

echo mysql_error($con);
if(!$sql)
	echo "error in inserting...!";
else
	header("location:post.html");
mysql_close($con);
?>


<?php
session_start();
$con=mysql_connect("localhost","root","cfg2014!");
echo mysql_error($con);
if(!$con)
echo "NO CONNECTION WITH DATABASE...";
mysql_select_db("CFG2014");
echo mysql_error($con);
$abc=$_POST['name'];

$sql=mysql_query("CREATE TABLE $abc (queries VARCHAR(50) )");
$sql1=mysql_query("insert into $abc (queries) values ('hello')");
$_SESSION['tn']=$abc;
echo mysql_error($con);
if(!$sql)
	echo "error in inserting...!";
else
	header("location:post.html");
mysql_close($con);
?>

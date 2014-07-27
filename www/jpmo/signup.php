
<?php
$con=mysql_connect("localhost","root","cfg2014!");
echo mysql_error($con);
if(!$con)
echo "NO CONNECTION WITH DATABASE...";
mysql_select_db("CFG2014");
echo mysql_error($con);
if($_POST[des]=="student")
$des="student";
else if($_POST["des"]=="employer")
$des="employer";
else
$des="quest";
$sql=mysql_query("insert into users(name,password,phoneno,email,designation,company) values('$_POST[name]','$_POST[pass]','$_POST[phone]','$_POST[email]','$des','$_POST[company]')");
echo mysql_error($con);
if(!$sql)
	echo "error in inserting...!";
else
	header("location:login.html");
mysql_close($con);
?>

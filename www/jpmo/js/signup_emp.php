
<?php
$con=mysql_connect("localhost","root","cfg2014!");
echo mysql_error($con);
if(!$con)
echo "NO CONNECTION WITH DATABASE...";
mysql_select_db("CFG2014");
echo mysql_error($con);
$sql=mysql_query("insert into users(name,password,phoneno,email,designation,company) values('$_POST[name]','$_POST[pass]','$_POST[phone]','$_POST[email]','$_POST[phone]','$_POST[company]')");
echo mysql_error($con);
if(!$sql)
	echo "error in inserting...!";
else
	echo 'Congrats ... !';
mysql_close($con);
?>

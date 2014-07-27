
<?php
$con=mysql_connect("localhost","root","cfg2014!");
echo mysql_error($con);
if(!$con)
	echo "NO CONNECTION WITH DATABASE...";
mysql_select_db("CFG2014");
$sql=mysql_query("insert into job(position,work,age,gender,location,language,profile,terms,salary) values('$_POST[pos]','$_POST[code]','$_POST[age]','$_POST[gender]','$_POST[loc]','$_POST[lang]','$_POST[pro]','$_POST[terms]','$_POST[salary]')");
if(!$sql)
	echo "Error in Inserting...!";
else
	echo "Congrats..!";
mysql_close($con);
?>

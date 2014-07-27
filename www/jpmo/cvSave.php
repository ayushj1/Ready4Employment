
<?php
	
	
	$con=mysql_connect("localhost","root","cfg2014!");
	echo mysql_error($con);
	
	if(!$con)
	echo "NO CONNECTION WITH DATABASE...";
	mysql_select_db("CFG2014");
	
	
	$sql=mysql_query("insert into cv(name,gender,mobile_no,email_id,tenth,twelfth,degree,location,strengths) values('$_POST[name]','$_POST[gender]','$_POST[mobile_no]','$_POST[email_id]','$_POST[tenth]','$_POST[twelfth]','$_POST[degree]','$_POST[location]','$_POST[strengths]')");
	//echo mysql_error($con);
	if(!$sql)
		echo "error in inserting...!";
	else
		echo "Congrats ... !";
	mysql_close($con);
?>


<?php
	$con=mysql_connect("localhost","root","cfg2014!");
	echo mysql_error($con);
	
	if(!$con)
	echo "NO CONNECTION WITH DATABASE...";
	else
	echo "Successful";
	mysql_select_db("CFG2014");
	echo mysql_error($con);
	
	$sql=mysql_query("insert into cv(name,gender,mobile_no,email_id,tenth,twelfth,degree,location,strengths,experience,hobbies) values('$_POST[name]','$_POST[gender]','$_POST[mobile_no]','$_POST[email_id]','$_POST[10th]','$_POST[12th]','$_POST[degree]','$_POST[location]','$_POST[strengths]','$_POST[experience]','$_POST[hobbies]')");
	echo mysql_error($con);
	if(!$sql)
		echo "error in inserting...!";
	else
		echo 'Congrats ... !';
	mysql_close($con);
?>

<?php
//session_start();
ob_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password="cfg2014!"; // Mysql password
$db_name="CFG2014"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Define $myusername and $mypassword
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
//$_SESSION['un']=$myusername;
$sql="SELECT * FROM $tbl_name WHERE name='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
	$rows=mysql_fetch_row($result);
if($rows[4]=="student")
header("location:cvFinal.html");
else if($rows[4]=="employer")
header("location:emphome.html");
else 
header("location:questPage.html");
}
else{
header("location:loginfailure.html");
}
ob_end_flush();
?>

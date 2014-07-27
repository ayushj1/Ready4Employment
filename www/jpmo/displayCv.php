<!DOCTYPE html>
<html>
<body>
<?php
$con=mysql_connect("localhost","root","cfg2014!");
echo mysql_error($con);
if(!$con) {
echo "NO CONNECTION WITH DATABASE..."; 
}
mysql_select_db("CFG2014");
$sql=mysql_query("SELECT * from cv where name='hp' ");
if(!$sql) {
	echo "No Information available.... !";
}	
echo "<table border=\"6\" cellpadding=\"3\" cellspacing=\"3\" width=\"100%\">";
$info = mysql_fetch_assoc($sql);
//while($info=mysql_fetch_assoc($sql))
 //{
 echo "<tr>"; 
 echo "<th>Name:</th> <td>".$info["name"]."</td> ";
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Gender:</th> <td>".$info["gender"]."</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Mobile No.:</th> <td>".$info["mobile_no"]."</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Email Id:</th> <td>".$info["email_id"]."</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Tenth:</th> <td>".$info["tenth"]."</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Twelfth:</th> <td>".$info["twelfth"]."</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Degree:</th> <td>".$info["degree"]."</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Location:</th> <td>".$info["location"]."</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Strengths:</th> <td>".$info['strengths']."</td> "; 
 echo "</tr>";
  echo "<th>Hobbies:</th> <td>".$info['hobbies']."</td> "; 
 echo "</tr>";
 //break;
 //} 
 echo "</table>";
 //mysql_close($con);
 ?>
 </body>
 </html>
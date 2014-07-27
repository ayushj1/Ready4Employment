<?php
$con=mysql_connect("localhost","root","cfg2014!");
echo mysql_error($con);
if(!$con)
echo "NO CONNECTION WITH DATABASE...<br/>";
else
echo "Connected with DATABASE<br/>";
mysql_select_db("CFG2014");
$sql=mysql_query("SELECT * from job");
if(!$sql)
	echo "error in retrieving...!";
echo "<table border=5 cellpadding=3 cellspacing=3 width=100%><br/>";
while($info = mysql_fetch_array($sql))
 {
 echo "<tr>"; 
 echo "<th>Position:</th> <td>"$info["position"] "</td> ";
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Code Work Area:</th> <td>"$info["work"] "</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Age:</th> <td>"$info["age"] "</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Gender:</th> <td>"$info["gender"] "</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Location:</th> <td>"$info["location"] "</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Language:</th> <td>"$info["language"] "</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Job Profile:</th> <td>"$info["profile"] "</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Mandatory Terms:</th> <td>"$info["terms"] "</td> "; 
 echo "</tr>";
 echo "<tr>"; 
 echo "<th>Salary Range:</th> <td>"$info["salary"] "</td> "; 
 echo "</tr>";
 } 
 echo "</table>";
 mysql_close($con);
 ?>
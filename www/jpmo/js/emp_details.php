<?php
$con=mysql_connect(" ","root","cfg2014!");
echo mysql_error($con);
if(!$con)
echo "NO CONNECTION WITH DATABASE...";
mysql_select_db("CFG2014");
echo mysql_error($con);
$sql=mysql_query("select * from job");
if(!$sql)
	echo "error in retrieving...!";
Print "<table border cellpadding="3" cellspacing="3" width="100%">";
while($info = mysql_fetch_array( $sql )) 
 { 
 Print "<tr>"; 
 Print "<th>Position:</th> <td>".$info['pos'] . "</td> "; 
 Print "</tr>";
 Print "<tr>"; 
 Print "<th>Code Work Area:</th> <td>".$info['work'] . "</td> "; 
 Print "</tr>";
 Print "<tr>"; 
 Print "<th>Age:</th> <td>".$info['age'] . "</td> "; 
 Print "</tr>";
 Print "<tr>"; 
 Print "<th>Gender:</th> <td>".$info['gender'] . "</td> "; 
 Print "</tr>";
 Print "<tr>"; 
 Print "<th>Location:</th> <td>".$info['loc'] . "</td> "; 
 Print "</tr>";
 Print "<tr>"; 
 Print "<th>Language:</th> <td>".$info['lang'] . "</td> "; 
 Print "</tr>";
 Print "<tr>"; 
 Print "<th>Job Profile:</th> <td>".$info['pro'] . "</td> "; 
 Print "</tr>";
 Print "<tr>"; 
 Print "<th>Mandatory Terms:</th> <td>".$info['terms'] . "</td> "; 
 Print "</tr>";
 Print "<tr>"; 
 Print "<th>Salary Range:</th> <td>".$info['salary'] . "</td> "; 
 Print "</tr>";
 } 
 Print "</table>";
 mysql_close($con);
?>
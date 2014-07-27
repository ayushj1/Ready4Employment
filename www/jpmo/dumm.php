<?php

ob_start();

$host="localhost"; // Host name
$username="root"; // Mysql username
$password="cfg2014!"; // Mysql password
$db_name="CFG2014"; // Database name
$tbl_name="dummy"; // Table name


mysql_connect("$host", "$username", "$password") or die("cannot connect");
mysql_select_db("$db_name") or die("cannot select DB");

/*
$arr = array();
$sql = mysql_query("SELECT employer,COUNT(*) AS empno FROM $tbl_name GROUP BY employer");
while($obj = mysql_fetch_object($sql)) {
$arr[] = $obj;
}
echo $arr
echo json_encode($arr);
*/



$sql="SELECT employer,COUNT(*) FROM $tbl_name GROUP BY employer";

$result=mysql_query($sql);

$count=mysql_num_rows($result);
$str='{ "cols": [ {"id":"","label":"employer","pattern":"","type":"string"}, {"id":"","label":"empno","pattern":"","type":"number"} ], "rows": [ ';
$str2=']}';
$i=0;
$arr=array();
$arri=array();
$str1='';
while($row = mysql_fetch_array($result)) {
       $arr[$i]=$row[0];
       $arri[$i]=$row[1];
	   $str1=$str1.'{"c":[{"v":"'.$arr[$i].'","f":null},{"v":"'.$arri[$i].'","f":null}]},';
	   $i=$i+1;
      }
rtrim($str1,",");
echo $str.$str1.$str2;	  
	  
/*
function test($arr,$arri,$count)
{
    $array["cols"][] = array("id" => "", "label" => "Company Name", "pattern" => "", "type" => "string");
    $array["cols"][] = array("id" => "", "label" => "No of Placements", "pattern" => "", "type" => "string");
     $i=0
     while($count>0)
     {
      $array["rows"][] = array("c" => array( array("v"=>$arr[$i]), array("v"=>$arri[$i])) );
      $count=$count-1;
      $i=$i+1;
     }
    return $array; 
}

echo json_encode(test($arr,$arri,$count));
*/

//ob_end_flush();

?>

<?php
$q=$_GET["q"];

$con = mysql_connect("localhost", "root", "cwk");
     if (!$con) 
     {
     	die('Could not connect: ' . mysql_error());
     }

mysql_select_db("guesses", $con);

$sql="SELECT name FROM users WHERE name = '$q'";
$query=mysql_query($sql); 
$rows = mysql_num_rows($query);
if ($rows>0) 
{
	echo "dd";

}
else
{
	echo "cc";
}

mysql_close($con);
?>
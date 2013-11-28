<?php
// $q=$_GET["q"];
// echo "<script type='text/javascript'>alert($q);</script>"; 
$name=$_POST['name'];
$passwd=$_POST['pwd'];
// echo "1234";

// echo "<script type='text/javascript'>alert('用户名或密码错误,请重新登录');</script>"; 
$con = mysql_connect('localhost', 'root', 'cwk');
if (!$con)
 {
 die('Could not connect: ' . mysql_error());
 }

mysql_select_db("guesses", $con);
mysql_query("set names utf8");

if ($passwd=="") 
{
	$sql="SELECT name FROM user WHERE name = '$name'";
}
else
{
	$sql="SELECT name,passwd FROM user WHERE name='$name' && passwd='$passwd'";
}

$query=mysql_query($sql); 
$rows = mysql_num_rows($query);
if ($rows>0) 
{
	echo "1";

}
else
{
	echo "0";
}

mysql_close($con);
?>
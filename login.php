<html>
<body>
You are in<br />
<?php echo $_POST["username"]; ?><br />
<?php echo $_POST["password"]; ?><br />

<br />
<?php
	echo "Connect server succeed!<br />";
	$con=mysql_connect("localhost","root","czb");
	if(!$con)
	{
		die('Fail to connect:'.mysql_error());
	}
	else
	{
		echo "Connected!<br />";
	}
	mysql_select_db("bookshare",$con);
	$bool=true;
	$res=mysql_query("SELECT * FROM user");
	while($row=mysql_fetch_array($res)){
		if(!strcmp($row['username'],$_POST["username"]) && !strcmp($row['password'],$_POST["password"]))
		{
			echo "Login succeed!<br />";
			$bool=false;
		}
	}
	if($bool)
	{
		echo "Login fail!<br />";
	}
	mysql_close($con);
?>

</body>
</html>

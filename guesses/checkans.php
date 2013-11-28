<?php
    $content=$_POST['content'];
    $ans=$_POST['ans'];
    $name=$_POST['name'];

    // echo "<script>alert('亲,发布成功了');history.go(-2);</script>"; 
    $con = mysql_connect('localhost', 'root', 'cwk');
    if (!$con)
    {
         die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("guesses", $con);
    mysql_query("set names utf8");

	$sql="SELECT content,answer,name FROM dialogue WHERE content='$content' && name='$name' && answer='$ans'";

    $query=mysql_query($sql); 
    // $row=mysql_fetch_array($query);
    // echo $row['contentid'];
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
<?php
     session_start();
     if (! isset($_SESSION['view'])) 
     {
     	echo "<script>alert('亲,不登录不能发布哦');history.go(-2);</script>";
     }
     $content = $_POST['word'];
     $answer = $_POST['answer'];
     $name=$_SESSION['view'];

     // echo $_SESSION['view'];
     // exit();
     $con = mysql_connect("localhost", "root", "cwk");
     if (!$con) 
     {
     	die('Could not connect: ' . mysql_error());
     }
     
     mysql_select_db("guesses", $con);
     mysql_query("set names utf8");
     
    $sql="INSERT INTO dialogue (content, answer, name)
    VALUES
    ('$content','$answer','$name')";

    if (!mysql_query($sql,$con))
    {
        die('Error: ' . mysql_error());
    }
    mysql_close($con);
    echo "<script>alert('亲,发布成功了');history.go(-2);</script>";     
?>
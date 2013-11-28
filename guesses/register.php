<?php
     session_start();
     $name = $_POST['name'];
     $passwd = $_POST['passwd'];

     // echo $_SESSION['view'];
     // exit();
     $con = mysql_connect("localhost", "root", "cwk");
     if (!$con) 
     {
     	die('Could not connect: ' . mysql_error());
     }
     
     mysql_select_db("guesses", $con);
     mysql_query("set names utf8");

     
    $sql="INSERT INTO user (name, passwd)
    VALUES
    ('$_POST[name]','$_POST[passwd]')";

    if (!mysql_query($sql,$con))
    {
        die('Error: ' . mysql_error());
    }
    mysql_close($con);
    $_SESSION['view'] = $name;
    header("Location: index.php");
     
?>
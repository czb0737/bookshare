<?php
     session_start();
     $name = $_POST['name'];
     $passwd = $_POST['passwd'];

     mysql_close($con);
     $_SESSION['view'] = $name;
     header("Location: index.php");
     // echo "success";
?>
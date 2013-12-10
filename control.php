<?php
   error_reporting(E_ALL&~E_NOTICE);
  
  function __autoload($className)  //自动加载_class.php文件
  {	
  	include $className."_class.php"; 

  }
  	
  $user1Model = new User1Model();  
  switch ($_POST['action']) {  //根据action的值决定动作
  	case 'register':
  		$user = new User($_POST); //根据post值构造实例user
  		if ($user1Model->regiIsValid($user)) { //调用User1Model的判断注册信息是否合法函数（重名或相同email）
  			if($user1Model->addUser($user))  //调用User1Model的addUser方法，添加新用户
  			   echo "register success";
  			else
  			   echo "register failed";
  			
  		}
  		else
  			echo "invalid infomation";
  		break;

  	case 'login':
  	    $user = new User($_POST);
  	    if ($user1Model->loginIsValid($user)) { //调用User1Model的方法判断登录信息是否合法（用户是否存在，密码是否正确）
  	    	if ($user1Model->login($user)) 
  	    		echo "login success";
  	    	else
  	    		echo "login failed";
  	    }
  	    else
  	    	echo "wrong username or password"; 	
  	    break;
     
     case 'judgeRegisUserN': //当用户填好用户名注册时，ajax判断是否有效
        $user = new User($_POST);
        if ($user1Model->judgeRegisUserN($user)) 
         	echo "ok,username hasn't been used";     
        else
        	echo "no,username has been used!";
        break;

    case 'judgeRegisEmail': //当用户填好email注册时，ajax判断是否有效
        $user =new User($_POST);
        if ($user1Model->judgeRegisEmail($user)) 
            echo "ok,email hasnot been used";    
         else
         	echo "no,email has been used!";  
         break; 

     }

  

?>


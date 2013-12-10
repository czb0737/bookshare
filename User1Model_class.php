<?php
   require ('connectDB_class.php');// 不确定是否需要

   class User1Model extends connectDB 
   {
      // 添加用户方法
      public function addUser ($user)  
      {
         $query = "insert into user1(Username,Password,Email,Status) values (?,?,?,?)"; // insert query
         $stmt = $this->mysqli->prepare($query);  // 预处理
         $stmt->bind_param('sssi',$Username,$Password,$Email,$Status); // 绑定参数
         
         $Status = 0;
         $Password = $user->getPassword(); // 从User_class.php 中取得信息
         $Email = $user->getEmail();
         $Username = $user->getUsername();
         
         $stmt->execute();  //执行插入

         if ($stmt->affected_rows!=1) { // 不成功插入的话
          # code...
          $this->printError('insert new user failed :'.$stmt->error); // 执行父类的printError()
          return false;
         }
         else 
         {
          return $this->mysqli->insert_id; //成功插入，返回数据ID号
         }
      }


      // 修改用户信息方法 （密码，Email）
      public function changeUserInfo($user)
      {
         $query = "update user1 set Password=?,Email=? where Username=?"; // query描写
         $stmt = $this->mysqli->prepare($query); // 准备
         $stmt->bind_param('sss',$Password ,$Email , $Username); // 绑定参数
         
         // 给参数赋值，分别为$user中返回的密码，email，用户名
         $Password = $user->getPassword(); 
         $Email = $user->getEmail();
         $Username = $user->getUsername();
         
         $stmt->execute(); //执行

         if ($stmt->affected_rows!=1) {  //判断是否正确执行，未则返回false并输出错误信息，正则返回true
            # code...
            $this->printError("faile to update your info :".$stmt->error);
            return false;
         }
         else{
            return true;
         }
      }
       
       //  修改用户登录时用户的Status
       public function login($user)
       {
         $query = "update user1 set Status=1 where Username=?";  //编写quer ，将登录者的statu置为1，用username来选择元组
         $stmt = $this->mysqli->prepare($query); 
         $stmt->bind_param('s',$Username);  //绑定参数

         $Username = $user->getUsername();

         $stmt->execute(); //  执行
         
           if ($stmt->affected_rows!=1) {  //判断是否正确执行，未则返回false并输出错误信息，正则返回true
            # code...
            $this->printError("faile to login :".$stmt->error);
            return false;
         }
         else{
            return true;
         }

       }

       
       // 判断注册信息是否有效 （Email和Username是否unique）
       public function regiIsValid($user)
       {
         if($user->getUsername()=='') //判断用户是否修改了js，强制输送了空值
            return false;
         if($user->getEmail()=='') 
            return false;
          
         $query = "select * from user1 where Username=? or Email=?"; //query语句，选择 Username或者Email有相同的
         $stmt = $this->mysqli->prepare($query); 
         $stmt->bind_param('ss',$Username,$Email);

         $Username = $user->getUsername();
         $Email = $user->getEmail();

         $stmt->execute(); // 执行query
         $stmt->store_result(); // 将获得的结果从server取回Client
         if ($stmt->num_rows >0) { // 判断select的结果是否为0
            # code...
            return false;
         }
         else
         {
            return true;
         }
       }


        // 判断登录是否有效
       public function loginIsValid($user)
       {
         $query = "select Password from user1 where Username=?";//query语句，根据Username选出password
         $stmt = $this->mysqli->prepare($query); 
         $stmt->bind_param('s',$Username);

         $Username = $user->getUsername();

         $stmt->execute(); // 执行query
         $stmt->store_result(); // 将获得的结果从server取回Client
         if ($stmt->num_rows >0) { // 判断select的结果是否为0
            # code...
            $stmt->bind_result($Password);
            if ($Password==$user->getPassword()) {
               return true;
            }
            else{
               return false;
            }
         }
         else
         {
            return false;
         }
       }
   
        //ajax判断用户填写的用户名是否可用
        public function judgeRegisUserN($user) 
        {
         $query = "select * from user1 where Username=?";//query语句，判断是否username已经被用
         $stmt = $this->mysqli->prepare($query); 
         $stmt->bind_param('s',$Username);

         $Username = $user->getUsername();

         $stmt->execute(); // 执行query
         $stmt->store_result(); // 将获得的结果从server取回Client
         
         if ($stmt->num_rows >0) { // 判断select的结果是否为0
            # code...
            return false;
         }
         else
         {
            return true;
         }
        } 

        //ajax判断用户填写的email是否可用
        public function judgeRegisEmail($user) 
        {
         $query = "select * from user1 where Email=?";//query语句，判断是否email已经被用
         $stmt = $this->mysqli->prepare($query); 
         $stmt->bind_param('s',$Email);

         $Email = $user->getEmail();

         $stmt->execute(); // 执行query
         $stmt->store_result(); // 将获得的结果从server取回Client
         
         if ($stmt->num_rows >0) { // 判断select的结果是否为0
            # code...
            return false;
         }
         else
         {
            return true;
         }
        } 
    }      
?>

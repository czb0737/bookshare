<?php
   require ('connectDB_class.php');// 不确定是否需要

   class User2Model extends connectDB 
   {
      // 添加用户方法
      public function updateUser2 ($user)  
      {
         $query = "update user2 set StudentId=?,Address=?,QQ=?,Phone=?,Major=?,Grade=?,UserPicture=?,  where userID=$user->getUserID()"; // insert query
         $stmt = $this->mysqli->prepare($query);  // 预处理
         $stmt->bind_param('isiisss',$StudentId,$Address,$QQ,$Phone,$Major,$Grade,$UserPicture); // 绑定参数
         
         $StudentId=$user->getStudentID();
         $Address = $user->getAddress(); // 从User_class.php 中取得信息
         $QQ = $user->getQQ();
         $Phone = $user->getPhone();
		 $Major = $user->getMajor();
		 $Grade = $user->getGrade();
		 $UserPicture = $user->getUserPicture();
         
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
?>
<?php
   require ('connectDB_class.php');// ��ȷ���Ƿ���Ҫ

   class User2Model extends connectDB 
   {
      // ����û�����
      public function updateUser2 ($user)  
      {
         $query = "update user2 set StudentId=?,Address=?,QQ=?,Phone=?,Major=?,Grade=?,UserPicture=?,  where userID=$user->getUserID()"; // insert query
         $stmt = $this->mysqli->prepare($query);  // Ԥ����
         $stmt->bind_param('isiisss',$StudentId,$Address,$QQ,$Phone,$Major,$Grade,$UserPicture); // �󶨲���
         
         $StudentId=$user->getStudentID();
         $Address = $user->getAddress(); // ��User_class.php ��ȡ����Ϣ
         $QQ = $user->getQQ();
         $Phone = $user->getPhone();
		 $Major = $user->getMajor();
		 $Grade = $user->getGrade();
		 $UserPicture = $user->getUserPicture();
         
         $stmt->execute();  //ִ�в���

         if ($stmt->affected_rows!=1) { // ���ɹ�����Ļ�
          # code...
          $this->printError('insert new user failed :'.$stmt->error); // ִ�и����printError()
          return false;
         }
         else 
         {
          return $this->mysqli->insert_id; //�ɹ����룬��������ID��
         }
      }
?>
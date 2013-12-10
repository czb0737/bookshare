<?php
	require('connect_class.php');

	class User2Model extends connectDB
	{
		//添加用户方法
		public function addUser($user)
		{
			$query="insert into user2(Username,StudentID,Address,QQ,Phone,Major,Grade,UserPicture)values(?,?,?,?,?,?,?,?)";
			$stmt=$this->mysqli->prepare($query);
			$stmt->bind_param('sisiisis',$Username,$StudentID,$Address,$QQ,$Phone,$Major,$Grade,$UserPicture);

			$Username=$user->getUsername();
			$StudentID=$user->getStudentID();
			$Address=$user->getAddress();
			$QQ=$user->getQQ();
			$Phone=$user->getPhone();
			$Major=$user->getMajor();
			$Grade=$user->getGrade();
			$UserPicture->getUserPicture();

			$stmt->execute();

			if($stmt->affect_rows!=1)
			{
				$this->printError('insert new user2 failed :'.$stmt->error);
				return false;
			}
			else
			{
				return $this->mysqli->insert_id;
			}
		}

		//修改用户信息方法
		public function 
	}
?>

<?php
   require ('connectDB_class.php');// ��ȷ���Ƿ���Ҫ

   class ShelfModel extends connectDB 
   {
   		public function addBook($shelf)
		{
			$query = "insert into Shelf(UserID,BookID,Username,Apply,Time) values (?,?,?,?,?)"; // insert query
			$stmt = $this->mysqli->prepare($query);  // Ԥ����
			$stmt->bind_param('iisss',$UserID,$BookID,$Username,$Apply,$Time); // �󶨲���
			 
			$UserID = $shelf->getUserID();
			$BookID = $shelf->getBookID();
			$Username = $shelf->getUsername(); // ��User_class.php ��ȡ����Ϣ
			$Apply = $shelf->getApply();
			$Time = $shelf->getTime();
			
			$stmt->execute();  //ִ�в���

			if ($stmt->affected_rows!=1) 
			{ // ���ɹ�����Ļ�
				$this->printError('insert new shelf failed :'.$stmt->error); // ִ�и����printError()
				return false;
			}
			else 
			{
				return $BookID; //�ɹ����룬�����鼮ID��
         	}
		}
		
		public function deleteBook($shelf)
		{
			$query = "delete from Shelf where BookID=?"; // delete query
			$stmt = $this->mysqli->prepare($query);  // Ԥ����
			$stmt->bind_param('i',$BookID); // �󶨲���
			
			$BookID = $shelf->getBookID();
			
			$stmt->execute();  //ִ��ɾ��
			
			if ($stmt->affected_rows!=1) 
			{ // ���ɹ�ɾ���Ļ�
				$this->printError('Delete comment failed :'.$stmt->error); // ִ�и����printError()
				return false;
			}
			else 
			{
				return $BookID; //�ɹ�ɾ���������鼮ID��
         	}
		}
   }
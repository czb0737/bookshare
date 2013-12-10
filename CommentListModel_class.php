<?php
   require ('connectDB_class.php');// ��ȷ���Ƿ���Ҫ

   class CommentListModel extends connectDB 
   {
   		public function addComment($commentList)
		{
			$query = "insert into CommentList(BookID,Username,Comment,Time) values (?,?,?,?)"; // insert query
			$stmt = $this->mysqli->prepare($query);  // Ԥ����
			$stmt->bind_param('isss',$BookID,$Username,$Comment,$Time); // �󶨲���
			 
			$BookID = $commentList->getBookID();
			$Username = $commentList->getUsername(); // ��User_class.php ��ȡ����Ϣ
			$Comment = $commentList->getComment();
			$Time = $commentList->getTime();
			
			$stmt->execute();  //ִ�в���

			if ($stmt->affected_rows!=1) 
			{ // ���ɹ�����Ļ�
				$this->printError('insert new user failed :'.$stmt->error); // ִ�и����printError()
				return false;
			}
			else 
			{
				return $BookID; //�ɹ����룬�����鼮ID��
         	}
		}
		
		public function deleteComment($commemtList)
		{
			$query = "delete from CommentList where BookID=?,Time=?"; // delete query
			$stmt = $this->mysqli->prepare($query);  // Ԥ����
			$stmt->bind_param('is',$BookID,$Time); // �󶨲���
			
			$BookID = $commentList->getBookID();
			$Time = $commentList->getTime();
			
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
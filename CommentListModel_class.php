<?php
   require ('connectDB_class.php');// 不确定是否需要

   class CommentListModel extends connectDB 
   {
   		public function addComment($commentList)
		{
			$query = "insert into CommentList(BookID,Username,Comment,Time) values (?,?,?,?)"; // insert query
			$stmt = $this->mysqli->prepare($query);  // 预处理
			$stmt->bind_param('isss',$BookID,$Username,$Comment,$Time); // 绑定参数
			 
			$BookID = $commentList->getBookID();
			$Username = $commentList->getUsername(); // 从User_class.php 中取得信息
			$Comment = $commentList->getComment();
			$Time = $commentList->getTime();
			
			$stmt->execute();  //执行插入

			if ($stmt->affected_rows!=1) 
			{ // 不成功插入的话
				$this->printError('insert new user failed :'.$stmt->error); // 执行父类的printError()
				return false;
			}
			else 
			{
				return $BookID; //成功插入，返回书籍ID号
         	}
		}
		
		public function deleteComment($commemtList)
		{
			$query = "delete from CommentList where BookID=?,Time=?"; // delete query
			$stmt = $this->mysqli->prepare($query);  // 预处理
			$stmt->bind_param('is',$BookID,$Time); // 绑定参数
			
			$BookID = $commentList->getBookID();
			$Time = $commentList->getTime();
			
			$stmt->execute();  //执行删除
			
			if ($stmt->affected_rows!=1) 
			{ // 不成功删除的话
				$this->printError('Delete comment failed :'.$stmt->error); // 执行父类的printError()
				return false;
			}
			else 
			{
				return $BookID; //成功删除，返回书籍ID号
         	}
		}
   }
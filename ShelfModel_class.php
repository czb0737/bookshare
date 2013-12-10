<?php
   require ('connectDB_class.php');// 不确定是否需要

   class ShelfModel extends connectDB 
   {
   		public function addBook($shelf)
		{
			$query = "insert into Shelf(UserID,BookID,Username,Apply,Time) values (?,?,?,?,?)"; // insert query
			$stmt = $this->mysqli->prepare($query);  // 预处理
			$stmt->bind_param('iisss',$UserID,$BookID,$Username,$Apply,$Time); // 绑定参数
			 
			$UserID = $shelf->getUserID();
			$BookID = $shelf->getBookID();
			$Username = $shelf->getUsername(); // 从User_class.php 中取得信息
			$Apply = $shelf->getApply();
			$Time = $shelf->getTime();
			
			$stmt->execute();  //执行插入

			if ($stmt->affected_rows!=1) 
			{ // 不成功插入的话
				$this->printError('insert new shelf failed :'.$stmt->error); // 执行父类的printError()
				return false;
			}
			else 
			{
				return $BookID; //成功插入，返回书籍ID号
         	}
		}
		
		public function deleteBook($shelf)
		{
			$query = "delete from Shelf where BookID=?"; // delete query
			$stmt = $this->mysqli->prepare($query);  // 预处理
			$stmt->bind_param('i',$BookID); // 绑定参数
			
			$BookID = $shelf->getBookID();
			
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
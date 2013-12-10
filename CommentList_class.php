<?php
	class CommentList
	{
		private $BookID;//pramary key , auto increment
		private $Username;//评论者
		private $Comment;//评论内容
		private $Time;//评论时间
		
		public function __construct($user=array())
		{
			foreach($commentList as $key=>$value)
			{
				$this->$key=$value;
			}
		}
	
		public function getBookID()//返回书籍ID
		{
			if(!empty($this->BookID))
			{
				return $this->BookID;
			}
			else
				return false;
		}
	
		public function getUsername()//返回评论者
		{
			if(!empty($this->Username))
			{
				return $this->Username;
			}
			else
				return false;
		}
		
		public function getComment()//返回评论内容
		{
			if(!empty($this->Comment))
			{
				return $this->Comment;
			}
			else
				return false;
		}
		
		public function getTime()//返回评论时间
		{
			if(!empty($this->Time))
			{
				return $this->Time;
			}
			else
				return false;
		}
	}
?>
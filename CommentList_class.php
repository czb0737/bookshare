<?php
	class CommentList
	{
		private $BookID;//pramary key , auto increment
		private $Username;//������
		private $Comment;//��������
		private $Time;//����ʱ��
		
		public function __construct($user=array())
		{
			foreach($commentList as $key=>$value)
			{
				$this->$key=$value;
			}
		}
	
		public function getBookID()//�����鼮ID
		{
			if(!empty($this->BookID))
			{
				return $this->BookID;
			}
			else
				return false;
		}
	
		public function getUsername()//����������
		{
			if(!empty($this->Username))
			{
				return $this->Username;
			}
			else
				return false;
		}
		
		public function getComment()//������������
		{
			if(!empty($this->Comment))
			{
				return $this->Comment;
			}
			else
				return false;
		}
		
		public function getTime()//��������ʱ��
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
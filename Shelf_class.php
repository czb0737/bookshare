<?php
  class Shelf
  {
  	private $UserID;//���������û���ID
  	private $BookID;//��������鼮��ID
	private $Username;//�����˵��û���
	private $Apply;
	private $Time;//�鼮�ϼ�ʱ��
	
	public function __construct($user=array()) //���캯��������Ϊһ���飬keyΪ��Ӧ����
    {
     	foreach ($shelf as $key => $value) {
     		# code...
     		$this->$key = $value;
     	}
    }
	
	public function getUserID
	{
		if(!empty($this->UserID))
		{
			return $this->UserID;
		}
		else
			return false;
	}
	
	public function getBookID
	{
		if(!empty($this->BookID))
		{
			return $this->BookID;
		}
		else
			return false;
	}
	
	public function getUsername
	{
		if(!empty($this->Username))
		{
			return $this->Username;
		}
		else
			return false;
	}
	
	public function getApply
	{
		if(!empty($this->Apply))
		{
			return $this->Apply;
		}
		else
			return false;
	}
	
	public function getTime
	{
		if(!empty($this->Time))
		{
			return $this->Time;
		}
		else
			return false;
	}
  }
<?php
  class Shelf
  {
  	private $UserID;//货架所属用户的ID
  	private $BookID;//货架里的书籍的ID
	private $Username;//申请人的用户名
	private $Apply;
	private $Time;//书籍上架时间
	
	public function __construct($user=array()) //构造函数，参数为一数组，key为对应属性
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
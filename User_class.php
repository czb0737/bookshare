<?php
  class User{
  	private $UserID ;  // pramary key , auto increment
        private $Username ; // unique,not null
 	private $Password ; // not null
	private $Email ; // nuique , not null
	private $Status ;  // int
	private $StudentId ;
	private $Address ;
	private $QQ ; 
	private $Phone ;    
	private $Major ;  
	private $Grade ;
	private $UserPicture ;
     
     // 当传入为POST时，正好就能拿上用. 参数为_POST
     public function __construct($user=array()) //构造函数，参数为一数组，key为对应属性
     {
     	foreach ($user as $key => $value) {
     		# code...
     		$this->$key = $value;
     	}
     }

     public function getUserID()  // 返回用户ID
     {
     	if (!empty($this->UserID)) {
     		# code...
     		return $this->UserID;
     	}
     	else
     		return false;
     }
    

     public function getUsername()  // 返回用户名
     {
     	if (!empty($this->Username)) {
     		# code...
     		return $this->Username;
     	}
     	else
     		return false;
     }



     public function getPassword()  // 返回用户pwd
     {
     	if (!empty($this->Password)) {
     		# code...
     		return $this->Password;
     	}
     	else
     		return false;
     }
     

     public function getEmail()  // 返回用户email
     {
     	if (!empty($this->Email)) {
     		# code...
     		return $this->Email;
     	}
     	else
     		return false;
     }

     public function getStatus()  // 返回用户在线状态
     {
     	if (!empty($this->Status)) {
     		# code...
     		return $this->Status;
     	}
     	else
     		return false;
     }
     public function getStudentId()  // 返回用户StudentId
     {
     	if (!empty($this->StudentId)) {
     		# code...
     		return $this->StudentId;
     	}
     	else
     		return false;
     }

     public function getAddress()  // 返回用户Address
     {
     	if (!empty($this->Address)) {
     		# code...
     		return $this->Address;
     	}
     	else
     		return false;
     }
     public function  getQQ()  // 返回用户QQ
     {
     	if (!empty($this->QQ)) {
     		# code...
     		return $this->QQ;
     	}
     	else
     		return false;
     }
     public function getPhone()  // 返回Phone
     {
     	if (!empty($this->Phone)) {
     		# code...
     		return $this->Phone;
     	}
     	else
     		return false;
     }


     public function getMajor()  // 返回Major
     {
     	if (!empty($this->Major)) {
     		# code...
     		return $this->Major;
     	}
     	else
     		return false;
     }


     public function getGrade()  // 返回Grade
     {
     	if (!empty($this->Grade)) {
     		# code...
     		return $this->Grade;
     	}
     	else
     		return false;
     }

     public function getUserPicture()  // 返回UserPicture
     {
     	if (!empty($this->UserPicture)) {
     		# code...
     		return $this->UserPicture;
     	}
     	else
     		return false;
     }



  }
?>

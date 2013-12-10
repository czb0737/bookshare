<?php
/*该文本为创建一个类连接数据库，database选择为 sharebook 连接有误时会输出错误信息*/
  class connectDB{
      protected $mysqli; 
      protected $showerror;
      
      public function __construct($showerror= true)  // 构建函数，默认自动输出错误信息
      {
      	 $this->showerror = $showerror;
         $this->mysqli = new mysqli("localhost","root","","sharebook"); // 连接
         if (mysqli_connect_errno()) {  // 判断，如果连接失败
                  	# code...
         	$this->printError("failed to connect to DB , reason: ".mysqli_connect_error()); // 输出错误信息
         	$this->mysqli = false; // 此时属性为false
         	exit();
         }
         
      }    
        
      protected function printError($errorMessage) //输出errormessage
      {
      	if ($this->showerror) {
      		# code...
      		echo "$errorMessage";
      	}
      	
      }

      public function close() // 关闭连接，释放内存
      {
      	if ($this->mysqli) {
      		# code...
      		$this->mysqli->close();
      	}
      	$this->mysqli = false;
      }

      public function __destruct() // 析构函数，调用close()
      {
      	$this->close(true);
      }


  }


 
?>
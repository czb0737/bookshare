 //构造request
function createRequest()
	{
       var request = null;
	   try { 
		     request = new XMLHttpRequest();
		   }catch(trymicrosoft)
		   {
			  try {
				    request = new ActiveXObject("Msxm12.XMLHTTP");
				  }   catch (othermicrosoft)
				  {
					try{
						 request = new ActiveXObject("Microsoft.XMLHTTP");
						}  catch(failesd)
						{request=null;}
				  }
		   }
		   if(request==null)
		     {alert("can not create request");}
		   else{
			   return request;
			   }	 
	}
	
var request1 = createRequest();
//var request2 = createRequest();


// 当用户离开用户名框时自动调用，判断是否已经被注册，判断是否合法
function judgeUsername() 
{
  	var user_nameEx = /^\w{3,6}/; // 用户名格式3-6位数字字母下划线
	var username = document.getElementById("name").value;
	if( ! user_nameEx.test(username) ) //如果用户名不合法
	     {
		    alert ("wrong fomat username!");  // 可以改成修改<span>提示信息在框后
			return false;
		  }
		  
	var url = "control.php?action=judgeRegisUserN";        
	request1.open("POST",url,true);
	request1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	request1.onreadystatechange = tellUsername;
	request1.send("Username="+username);	  
}


//反馈judgeUsername 发送的request，返回用户名是否可用被使用
function tellUsername() 
{
   
   if(request1.readyState == 4)
	  {
		  if(request1.status == 200)
		  {
			   
			  var chattext = request1.responseText; // response为text形式得到反馈信息
			  alert (chattext); // 后改为在注册用户名框后<span>表示
		  }
		  else 
		  alert("request1.status="+request1.status);
	}
}


// 当用户离email框时自动调用，判断是否已经被注册，判断是否合法
function judgeEmail() 
{
  	var emailEx = /.+@\w+\.(info|biz|com|edu|gov|net|am|bz|cn|cx|hk|jp|tw|vc|vn)$/ ; // 邮箱格式为 @符号前有一个或多个任意字符	
	var email = document.getElementById("email").value;
	 if(! emailEx.test(email))  //email不合法
	    {
		   alert ("wrong fomat email");
		   return false;	
		}	 		  
	var url = "control.php?action=judgeRegisEmail";        
	request1.open("POST",url,true);
	request1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	request1.onreadystatechange = tellEmail;
	request1.send("Email="+email);	  
}


 //反馈judgeEmail 发送的request，返email是否可被使用
function tellEmail()
{
   if(request1.readyState == 4)
	  {
		  if(request1.status == 200)
		  {
			  var chattext = request1.responseText; // response为text形式得到反馈信息
			  alert (chattext); // 后改为在注册email框后<span>表示
		  }
	}
}


//当用户离密码框时自动调用，判断是否已经被注册，判断是否合法
function judgePassword ()
{
   var passwordEx = /\w{6,12}/ ; // 密码为6-12位数字字母下划线构成
   var password = document.getElementById("password").value;	
    if( ! passwordEx.test(password) ) //密码不合法
	     {
		    alert ("wrong fomat password");
			return false;	 
		 }	 
}


// 当用户点submit时候调用，检查并发送register请求
function judgeInfo()  
	{
		var user_nameEx = /\w{3,6}/; // 用户名格式3-6位数字字母下划线
		var passwordEx = /\w{6,12}/ ; // 密码为6-12位数字字母下划线构成
		var emailEx = /.+@\w+\.(info|biz|com|edu|gov|net|am|bz|cn|cx|hk|jp|tw|vc|vn)$/ ; // 邮箱格式为 @符号前有一个或多个任意字符	

	   var username = document.getElementById("name").value;
	   var password = document.getElementById("password").value;	   
	   var confirmpass = document.getElementById("confirmpass").value;
	   var email = document.getElementById("email").value;
	  
	  
	   if(username==''||password==''||confirmpass==''||email=='')  //如果注册信息有空值的话
	     {
		    alert("please fill in all the blank!");
			return false;	 
		 }
		
		//alert("here is ossk"); 
	   if( !user_nameEx.test(username) ) //如果用户名不合法
	     {
		    alert ("wrong fomat username!");  // 可以改成修改<span>提示信息在框后
			return false;
		  }
		
		 if(! emailEx.test(email))  //email不合法
	    {
		   alert ("wrong fomat email");
		   return false;	
		}
		 
	   if( ! passwordEx.test(password) ) //密码不合法
	     {
		    alert ("wrong fomat password");
			return false;	 
		 }	 
		
	  	 
		 
		if (password!=confirmpass) //两次密码不一致
		{
		   alert ("confirm psw is not same as psw");
		   
		   return false;	
		} 
		
		 
	   //利用POST传送数据
	   var url = "control.php?action=register";        
	   request1.open("POST",url,true);
	   request1.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	   request1.onreadystatechange = updatePage;
	   request1.send("Username="+username+"&Password="+password+"&Email="+email);
	
	  //利用GET传送数据
	  /* var url= "chat.php?username="+username+"&title="+title+"&mess="+mess; 
	   request1.open("GET",url,true);
	   request1.onreadystatechange = updatePage;	
	   request1.send(null);*/
	   
	}	
	
	function updatePage()
	{
	    if(request1.readyState == 4)
	  {
		  if(request1.status == 200)
		  {

			  var chattext = request1.responseText; // response为text形式得到反馈信息
		      alert (chattext);
			
		  }
	  }
	}
	


  
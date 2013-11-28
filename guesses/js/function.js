var xmlHttp;
var flag;
var curNode;

function check(cur,fla) 
{
	xmlHttp = GetXmlHttpObject();
	if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request")
        return;
    }
    flag=fla;
    var url="check.php";
    // url=url+"?q="+cur;
     // url=url+"&sid="+Math.random();
    // xmlHttp.onreadystatechange=stateChanged; 
    // xmlHttp.open("GET",url,true);
    // xmlHttp.send(null);
    if (fla=='3') 
    {
    	var name=document.getElementById("logname").value;
    	var password=cur;
    }
    else
    {
    	var name = cur;
    	var password = "";
    }
   
    xmlHttp.open("POST",url,true);
    xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=UTF-8");
    xmlHttp.send("name="+name+"&pwd="+password);
    xmlHttp.onreadystatechange=stateChanged;
}

function checkans (cur,fla) 
{
    flag = fla;
    curNode = cur;
    var pre = cur.previousSibling.previousSibling;
    var parent = cur.parentNode;
    var author = parent.nextSibling.nextSibling;
    var ans = pre.value;
    var name = author.innerHTML;
    var content = parent.previousSibling.previousSibling.innerHTML;
    xmlHttp = GetXmlHttpObject();
    if (xmlHttp==null)
    {
        alert ("Browser does not support HTTP Request")
        return;
    }
    var url="checkans.php";
    xmlHttp.open("POST",url,true);
    xmlHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded;charset=UTF-8");
    xmlHttp.send("content="+content+"&ans="+ans+"&name="+name);
    xmlHttp.onreadystatechange=stateChanged;
}

function stateChanged() 
{ 
    if (xmlHttp.readyState==4 )
    { 
    	if (flag=='1')
    	{
    		if (xmlHttp.responseText=='1') 
    	    {
    		    document.getElementById("checkname").innerHTML="用户已存在";
    	    }
    	    else
    	    {
    		    document.getElementById("checkname").innerHTML="";
    	    }
    	}
    	if (flag=='0')
    	{
    		if (xmlHttp.responseText=='1') 
    	    {
    		    document.getElementById("showname").innerHTML="";
    	    }
    	    else
    	    {
    		    document.getElementById("showname").innerHTML="用户不存在";
    	    }
    	}
    	if (flag=='3')
    	{
    		if (xmlHttp.responseText=='1') 
    	    {
    		    document.getElementById("showpw").innerHTML="";
    	    }
    	    else
    	    {
    		    document.getElementById("showpw").innerHTML="密码不正确";
    	    }
    	}
        if (flag=='4')
        {
            // alert(xmlHttp.responseText);
            var labelnode=curNode.nextSibling.nextSibling;
            
            // alert(labelnode.className);
            if (xmlHttp.responseText=='1') 
            {
                labelnode.style.background = "url(images/smile2.png)";
            }
            else
            {
                labelnode.style.background = "url('images/sad.png')";
            }
        }
    } 
}
function checkpw(cur) 
{
	var value = document.getElementById("Passwd").value;
	if (value != cur) 
	{
        document.getElementById("checkpw").innerHTML="两次输入的密码不一致";
	}
}
function inputpw() 
{
	document.getElementById("checkpw").innerHTML="";
}

function GetXmlHttpObject()
{
    var xmlHttp=null;
    try
    {
        // Firefox, Opera 8.0+, Safari
        xmlHttp=new XMLHttpRequest();
    }
    catch (e)
    {
        //Internet Explorer
        try
        {
             xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
             xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

function adddia (cur) 
{
	if (cur=='0')
    {
        // document.getElementById("senddia").style.disabled=true;
        // document.all.senddia.disabled='false';
        document.getElementById("senddia").disabled=true;
        document.getElementById("wordid").disabled=true;
        document.getElementById("wordans").disabled=true;
        // alert(document.getElementById("senddia").innerHTML);
        document.getElementById("senddia").innerHTML="登录后才可以发布哦";
    }
    else
    {
        document.getElementById("senddia").disabled=false;
        document.getElementById("wordid").disabled=false;
        document.getElementById("wordans").disabled=false;
        document.getElementById("senddia").disabled=false;
        document.getElementById("senddia").innerHTML="发布";
    }
}
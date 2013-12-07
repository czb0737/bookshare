function Login()
{
   $('.theme-popover-mask').fadeIn(100);
    $('.theme-popover').slideDown(200);
}

function closeLogin()
{
	$('.theme-popover-mask').fadeOut(100);
    $('.theme-popover').slideUp(200);
}

function Search()
{
   alert("Hello World!");
}
function changemodel (curnode,show,hide) 
{
	document.getElementById(show).style.display = "block";
	curnode.style.color = "#2e5306";
	document.getElementById(hide).style.display = "none";
	if (curnode.id == "infoone") 
	{
		document.getElementById('infotwo').style.color = "#80662b";
	}
	else
	{
		document.getElementById('infoone').style.color = "#80662b";
	}
}
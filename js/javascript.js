//首页的漂浮特效
var work=document.getElementById("work");
var one=document.getElementById("left_3");
var two=document.getElementById("right_4");
var three=document.getElementById("left_5");
var four=document.getElementById("right_6");


var zz=document.getElementById("zz");
var zx=document.getElementById("zx");
var yq=document.getElementById("yq");
	
var td=document.getElementById("td");
var zm=document.getElementById("zm");
		

function registe()
{
  window.location.href="./user_register/user_register.php";
}
function ajx(obj1)
{
		$("tr").remove(".dd");
		var text;
		for(var i=0;i<obj1.length;i++)
		{
			 text="<tr class='dd'><td>"+obj1[i].id+"</td><td><a href='#'>"+obj1[i].title+"</a></td><td>"+obj1[i].grade+"</td></tr>"
			 $("#table").append(text);
		}
}


function ajx1(obj1)
{
		$("tr").remove(".dc");
		var text;
		for(var i=0;i<obj1.length;i++)
		{
			 text="<tr class='dc'><td>"+obj1[i].num+"</td><td><a href='#'>"+obj1[i].name+"</a></td><td>"+obj1[i].introduction+"</td></tr>"
			 $("#table1").append(text);
		}
}


function ajx2(obj1)
{
		$("tr").remove(".dc");
		var text;
		for(var i=0;i<obj1.length;i++)
		{
			 text="<tr class='dc'><td>"+obj1[i].id+"</td><td><a href='#'>"+obj1[i].people+"</a></td><td>"+obj1[i].introduction+"</td></tr>"
			 $("#table1").append(text);
		}
}

function mvon()
{
	this.className="end";
	 Ajax="";
	 Ajax=createajax();
	 Ajax.open("get","conf/task.php?id="+this.id,true);
	 Ajax.send(null);
	 Ajax.onreadystatechange=function()
	{
		
			
		
		
		if(Ajax.readyState === 4 && Ajax.status === 200)
		{	
			var obj1=JSON.parse(Ajax.responseText);		
				if(obj1[0].title==undefined)
					{
						if(obj1[0].id==undefined)
							ajx1(obj1);
						else
							ajx2(obj1);
					}
				else
					{
					ajx(obj1);
					}
			
	
	 }
	}
}



function mvout()
{
	this.className="bf";
}
(
	function()
	{
	
		zz.onmouseover=mvon;
		zz.onmouseout=mvout;
		zx.onmouseover=mvon;
		zx.onmouseout=mvout;
		yq.onmouseover=mvon;
		yq.onmouseout=mvout;
		//任务
		
		td.onmouseover=mvon;
		td.onmouseout=mvout;
		zm.onmouseover=mvon;
		zm.onmouseout=mvout;
		//团队
	}
)();
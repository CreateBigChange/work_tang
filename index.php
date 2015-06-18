<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <?php
 function getScreen() 
 {
   $screenX = "<script>document.write(screen.width);</script>";
   $screenY = "<script>document.write(screen.height);</script>";
   $screen=$screenX." x ".$screenY;
   Return $screen;
  }
 ?>
<link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>
<div id="contant" width="<?php $screen ?>">
	<div id="head">
		<div id="logo" class="bgcolor">LOGO</div>
		<div id="bander">
	
		<div id="bander_left" class="bgcolor">实验室任务发布系统<br><p id="news"><marquee>最新消息(滚动)</marquee></div>
		
		<div id="bander_right" class="bgcolor">
		<form action="index.php" method="post" onsubmit=' return check()' id="foms">
		用户名<input type="text" value="5" size="18" name="user_name"><br>
		密码&nbsp&nbsp&nbsp&nbsp<input type="password" value="5" size="19" name="password"><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="submit" value="提交" > &nbsp&nbsp&nbsp <input type="button" value="注册" onclick="registe()">
		</form>
		</div>
		</div>
	</div>
	<div id="mid">
		<div class="nav"></div>
		<div id="menu" class="bgcolor">水平导航条</div>
		<div class="nav"></div>
		<div id="content">
			<div id="left_1" class="border">
				<table style="text-align:left"; id="table">
				<th colspan="3" class="bf" ><span id="zx">最近新任务</span > | <span id="yq">以前未接受任务</span> | <span id="zz">正在被执行任务</span></th>
				<?php
					 include("conf/conf.php");
					$sql="select id,title,grade from no_reciver";
					$resource=mysql_query($sql);
					//未接受任务的资源
					$num=mysql_num_rows($resource);
					$str="";
					for($i=0;$i<$num;$i++)
					{
						 $result=mysql_fetch_row($resource);
						 $str.='<tr class="dd"><td>'.$result[0].'</td><td><a href="http://www.baidu.com">'.$result[1].'</a></td><td>..........'.$result[2].'</td></tr>';
						
							
					}
					echo $str;
				?>
				</table>
			</div>
			<div id="right_2" class="border">
			
			
				<table id="table1">
				<th class="bf"	colspan="3"><span id="td">现有团队介绍</span> | <span id="zm">招募令</span></th>
				<?php
					// include("conf/conf.php");
					$sql="select num,name,introduction from team";
					$resource=mysql_query($sql);
					//未接受任务的资源
					$num=mysql_num_rows($resource);
					$str="";
					for($i=0;$i<$num;$i++)
					{
						 $result=mysql_fetch_row($resource);
						 $str.='<tr class="dc"><td>'.$result[0].'</td><td><a href="http://www.baidu.com">'.$result[1].'</a></td><td>..........'.$result[2].'</td></tr>';
						
							
					}
					echo $str;
				?>
	 
				</table>
			
			</div>
			<div class="nav"></div>
			<div id="work"style="width:1030px;" style="overflow:hidden;">
			<?php
					$sql="select url,introduction from ppo";
					$resource=mysql_query($sql);
					$result=mysql_fetch_row($resource);
			?>
				<a href="#"><div  class="div border" ><img class="god"  src=<?php echo "'img/".$result[0]."'" ?>/><span><?php echo $result[1] ?></span></div></a>
				<?php $result=mysql_fetch_row($resource); ?>
				<a href="#"><div  class="div border" ><img class="god"  src=<?php echo "'img/".$result[0]."'" ?>/><span><?php echo $result[1] ?></span></div></a>
				<?php $result=mysql_fetch_row($resource); ?>
				<a href="#"><div  class="div border" ><img class="god"  src=<?php echo "'img/".$result[0]."'" ?>/><span><?php echo $result[1] ?></span></div></a>
				<?php $result=mysql_fetch_row($resource); ?>
				<a href="#"><div  class="div border" ><img class="god"  src=<?php echo "'img/".$result[0]."'" ?>/><span><?php echo $result[1] ?></span></div></a>
				<?php $result=mysql_fetch_row($resource); ?>
				<a href="#"><div  class="div border" ><img class="god"  src=<?php echo "'img/".$result[0]."'" ?>/><span><?php echo $result[1] ?></span></div></a>
			</div>
		<div class="nav"></div>
		</div>
		<div id="right_box">
			<div id="top_7" class="border">论坛		</div>
			<div class="nav"></div>
			<div id="top_8" class="border">实验室简介</div>
			<div class="nav"></div>
			<div id="top_9" class="border">源码下载</div>
			<div class="nav"></div>
		</div>
	</div>
	<div id="footer" class="bgcolor">
	 @HNUST 计算机科学与技术学院
	 <br>
	 2014.3.26
	 <br>
	</div>
</div>
</body>
<script>
var obj;
var father=document.getElementById("bander_right");
var foms=document.getElementById("foms");
var arry=['Microsoft.XMLHTTP', 'MSXML.XMLHTTP', 'Msxml2.XMLHTTP.7.0', 'Msxml2.XMLHTTP.6.0', 'Msxml2.XMLHTTP.5.0', 'Msxml2.XMLHTTP.4.0', 'MSXML2.XMLHTTP.3.0', 'MSXML2.XMLHTTP'];
	function createajax()
	{
		var jax;
		if(window.XMLHttpRequest)
			{
				
				jax=new XMLHttpRequest();
				
			}
		else
			{
				for(var i=0;i<arry.length;i++)
					if(ActiveXObject(arry[i]))
						{	
							jax=new ActiveXObject(arry[i]);
							break;
						}
			}			
		return jax;
	}
var Ajax=createajax();

Ajax.onreadystatechange=function()
{
	if(Ajax.readyState === 4 && Ajax.status === 200)
	{
		obj=JSON.parse(Ajax.responseText);
	}
}
Ajax.open("post","conf/conf1.php",true);
Ajax.send();
var username=document.getElementsByName("user_name")[0];
var password=document.getElementsByName("password")[0];

//用于实现ajax

var news=document.getElementById("news");
	
//消息的动态处理
function check()
{	

	var i;
	for(i=0;i<obj['teacher'].length;i++)
	{
		if(username.value == obj['teacher'][i].name&&password.value == obj['teacher'][i].password)
			{
				father.removeChild(foms);
				//删除表单
				
				var op=document.createElement("p");
				var oText=document.createTextNode("hello teacher:  "+username.value);
				
				
				//****************************************************
				localStorage.setItem("username",username.value);//****
				localStorage.setItem("usertype","teacher");//****
				localStorage.setItem("password",password.value);//****
			
				Ajax.open("get","conf/session.php?name='"+username.value+"'&type=0",true);	
				Ajax.send();
				//****
				//Ajax.send("ssssss");
				//****
				//异步实现session
																//****
				//****************************************************
				//设定缓存
				
				
				op.appendChild(oText);
				//追加欢迎词
				op.appendChild(document.createElement("br"));
				//追加换行
				var a1=document.createElement("a")
				var img=document.createElement("img")
				
				a1.href="user/teacher/index.php";
				a1.innerText="修改资料";
				op.appendChild(a1);
				father.appendChild(op);
				//增加链接修改个人资料
				
				op.appendChild(document.createElement("br"));
				//追加换行
		
				var a2=document.createElement("a")
				a2.href="user/teacher/index.php";
				a2.innerText="进入主页";
				op.appendChild(a2);
				//进入个人主页
				father.appendChild(op);
				//追加标签
				return false
			}
			else
			{
				
				
			}
	}
	
	for(i=0;i<obj['student'].length;i++)
	{
		if(username.value == obj['student'][i].name && password.value == obj['student'][i].password)
		{
				father.removeChild(foms);
				//删除表单
				
				var op=document.createElement("p");
				var oText=document.createTextNode("hello student:  "+username.value);
				//****************************************************
				localStorage.setItem("username",username.value);//****
				localStorage.setItem("usertype","student");//****
				localStorage.setItem("password",password.value);
				
				Ajax.open("get","conf/session.php?name='"+username.value+"'&type=1",true);	
				Ajax.send();
				
				//****
				//****************************************************
				//设定缓存
				op.appendChild(oText);
				//追加欢迎词
				op.appendChild(document.createElement("br"));
				//追加换行
				var a1=document.createElement("a")
				a1.href="user/student/index.php";
				a1.innerText="修改资料";
				op.appendChild(a1);
				father.appendChild(op);
				//增加链接修改个人资料
					
				op.appendChild(document.createElement("br"));
		
				//追加换行
					
				var a2=document.createElement("a")
				a2.href="user/student/index.php";
				a2.innerText="进入主页";
				op.appendChild(a2);
				//进入个人主页
				father.appendChild(op);
				//追加标签
				return false
		}
		else
		{
			
		}
	}
	for(i=0;i<obj['graduates'].length;i++)
	{
		if(username.value == obj['graduates'][i].name&&password.value == obj['graduates'][i].password)
		{
				father.removeChild(foms);
				//删除表单
				
				var op=document.createElement("p");
				var oText=document.createTextNode("hello graduate:  "+username.value);
				
				
				//****************************************************
				localStorage.setItem("username",username.value);//****
				localStorage.setItem("usertype","graduates");//****
				localStorage.setItem("password",password.value);
				Ajax.open("get","conf/session.php?name='"+username.value+"'&type=2",true);	
				Ajax.send();
				//****
				//****************************************************
				//设定缓存
				
				
				op.appendChild(oText);
				//追加欢迎词
				op.appendChild(document.createElement("br"));
				//追加换行
				var a1=document.createElement("a")
				a1.href="user/graduate/index.php";
				a1.innerText="修改资料";
				op.appendChild(a1);
				father.appendChild(op);
				//增加链接修改个人资料
				
				op.appendChild(document.createElement("br"));
				//追加换行
				
				var a2=document.createElement("a")
				a2.href="user/graduate/index.php";
				a2.innerText="进入主页";
				op.appendChild(a2);
				//进入个人主页
				father.appendChild(op);
				//追加标签
				return false
			return false;
		}
		else
		{
			
		}
	}
	return false;
}
</script>
</html>
<script src="js/javascript.js"></script>
<script src="js/jQuery.js"></script>
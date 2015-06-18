<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
<script src="../../../../js/jQuery.js"></script>
<style>

#nav
{
background:#ff00ff;
width:1000px;
height:20px;
}
div
{
	float:left;
}
.div1
{
clear:both;
}
.left
{
	width:50px;
	height:90px;
}
.right1
{
	width:930px;
}
.right2
{
	float:right;
}
#nav1
{
	width:100%;
	height:5px;
	background:green;
}
span
{
	color:blue;
}
.replay
{
	width:600px;
	background:yellow;
	float:right;
	clear:both;
}
.replaychild
{
	width:80%;
	height:40px;
	float:right;
	clear:both;
	background:red;
}
.img
{
	width:50px;
	float:left;
}
.name
{
	float:left;
}
.time
{
	float:right;
	clear:both;
}
.fom
{
	position:absolute;
	left:300px;
	top:200px;
	background:red;
}
.speak
{
	background:green;
	float:right;
	clear:both;
}
#img1
{
	width:30px;
	height:30px;
	float:right;
}
</style>
</head>
<body onmousemove="test()">
<?php
include "../../../../conf/conf.php";
	if($_GET['id']<10000)
	{
		$sign= floor ($_GET['id']/10);
	}
	else
	{
			if($_GET['id']<10000)
			{
				$sign= floor($_GET['id']/100);
			}
			else
			{
				if($_GET['id']<10000)
				$sign= floor ($_GET['id']/1000);
			}
	}
			switch($sign)
			{
				case 123:
				$sql="select id,teacher,title,pro_date,end_date,grade,controduction from no_reciver";
				break;
				
				case 456:
				$sql="select id,teacher,title,pro_date,end_date,grade,controduction from new_task";
				break;
				
				case 789:
				$sql="select id,teacher,title,pro_date,end_date,grade,controduction from current_task";
				break;
				default:
				echo $sign;
			}
		$resource=mysql_query($sql);
		$result=mysql_fetch_row($resource);
?> 
<div align="center">
	<div class="div1">
		<table>
			<tr align="center">
				<td>ID</td><td>teacher</td><td colspan="2">title</td><td>pro_date</td><td>end_date</td><td>grade</td><td colspan="3">controduction</td>
			</tr>
			<?php
			
			?>
			<tr align="center">
				<td><?php echo $result[0] ?></td><td><?php  echo $result[1] ?></td><td colspan="2"><?php echo $result[2] ?></td><td><?php echo $result[3] ?></td><td><?php echo $result[4] ?></td><td><?php echo $result[5] ?></td><td colspan="3"><?php echo $result[6] ?></td>
			</tr>
		</table>
	</div>
	<div id="nav" class="div1"></div>
	<?php
		$sql="select number,identity,content,time from discuss where id=".$_GET['id'];
		$resource=mysql_query($sql);
		$rows=mysql_num_rows($resource);
		$result=mysql_fetch_row($resource);
		$str="";
		for($i=1;$i<=$rows;$i++)
		{
			$str.='<div class="div1" id='.$i.'>
			<div class="left"><div style="height:120px;"><img src="../../../../img/two.jpg" width="100px" height="120px" ></div><div>'.$result[1].':'.$result[0].'</div></div>
			<div class="right1"><div class="right1" style="height:250px;">'.$result[2].'</div><div class="right2">'.$result[3].'<span>replay</span></div></div>
			</div><div id="nav1"></div>';
		}
		echo $str;
	?>
</div>

<script>
		var sign1=false;
		var sx;
		var sy;
		var xc;
		var yc;
		sign2=false;
				function test()
				{
					
					sx=event.clientX;
					sy=event.clientY;
					
					if(sign1==true)
					{
						$("#form").css("left",sx-xc);
						$("#form").css("top",sy-yc);
					}
				}
		

</script>

</body>
<script>
(function()
{
		$(document).ready(
			function()
			{
				
				$("span").click(
					function()
					{
						//var text='<div id="replay"></div>';
						var text=document.createElement("div");
						text.className="replay";
						var obj=$(this)[0].parentNode.parentNode.parentNode;
						if((this).innerText=="replay")
						{
							(this).innerText="pick up";
							
							<?php
								$sql="select identity,number,content,time from child_discuss";
								$resource=mysql_query($sql);
								$rows=mysql_num_rows($resource);
								$result=mysql_fetch_row($resource);
								$str="";
							?>
								var tex1;
								var tex2;
								var tex3;
								var tex4;
								var tex5;
								for(var i=1;i<=<?php echo $rows?>;i++)
								{
								tex1=document.createElement("div");
								tex1.className="replaychild";
								tex1.innerText="wwwwwww";
								text.appendChild(tex1);
							//往text里面加评论
							tex2=document.createElement("img");
							tex2.src="../../../../img/two.jpg";
							tex2.className="img";
							text.appendChild(tex2);
							//加图片
							tex3=document.createElement("span");
							tex3.className="name";
							tex3.innerText="wwww:ww";
							text.appendChild(tex3);
							//名字
							
							tex4=document.createElement("span");
							tex4.className="time";
							tex4.innerText="2014-05-07 20:51:22";
							text.appendChild(tex4);
							//加时间
							
							tex5=document.createElement("span");
							tex4.className="speak";
							tex4.innerText="我要评论";
							text.appendChild(tex4);
							
								}
							$("#"+obj.id+"")[0].appendChild(text);
							
							$(".speak").click(
							
							function()
							{
								if(sign2==false)
								{
									var fom="<div class='fom' id='form'> <form><textarea rows='4' cols='40'></textarea> </input></form><img src='../../../../img/close.png' id='img1'><input type='submit' value='评论'></div>";
									$("body").append(fom);
									$("#form").css("left",200+$(document).scrollLeft());
									$("#form").css("top",300+$(document).scrollTop());
									$("#img1").click(
									function()
										{
										
											var obj=document.getElementById("form");
											document.body.removeChild(obj);
											sign2=false;
										}
													);
									$(".fom").mousedown(
									function()
										{
											sign1=true;	
											xc=event.clientX-$('.fom').offset().left;
											yc=event.clientY-$('.fom').offset().top;
										}
														)
								
									$(".fom").mouseup(
									function()
										{
											sign1=false;
										}
													)
									sign2=true;
								}
								else
								{
									
								}
								
							}
							);
							//加表单
							
						}
						else
						{
							(this).innerText="replay";
							$("#"+obj.id+"")[0].removeChild($("#"+obj.id+"")[0].lastChild);
							$("body")[0].removeChild($(".fom")[0]);
							sign2=false;
						}
					}
				);
				
			}
		);
		

}
)();
</script>
</html>


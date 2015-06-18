<html>
<head>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<script src="../../../js/jQuery.js"></script>
<style>
	.look
	{
		color:red;
	}
	.give
	{
		color:green;
	}
	.see
	{
		border:solid green 1px;
		position:absolute;
		top:200px;
		left:60px;
		width:60%;
	}
	.close
	{
		width:15px;
		height:15px;
		background:red;
		float:right;
	}
	.form
	{
		border:solid green 1px;
		position:absolute;
		top:200px;
		left:60px;
		width:60%;
	}
	.close1
	{
		width:15px;
		height:15px;
		background:red;
		float:right;
	}
</style>
</head>
<body onmousemove="test()">
<div id="one">wwwww</div>
<?php
	include "../../../conf/conf.php";
	session_start();
?>
<table align="center" border="1">
	<caption>这是你接受的所有任务</caption>
	<tr align="center">
	<td>id</td><td>teacher</td><td>pro_date</td><td>end_date</td><td>title</td><td>grade</td><td colspan=3>操作</td>
	</tr>
	<?php
		$sql="select id,teacher,pro_date,end_date,title,grade from current_task where identity = ".$_SESSION['type']." AND number=".$_SESSION['username'];
		$resource=mysql_query($sql);
		$result=mysql_fetch_row($resource);
		$rows=mysql_num_rows($resource);
		$str="";
		for($i=1;$i<=$rows;$i++)
		{	
			$str.='<tr align="center"><td>'.$result[0].'</td><td>'.$result['1'].'</td><td>'.$result['2'].'</td><td>'.$result['3'].'</td><td>'.$result['4'].'</td><td>'.$result['5'].'</td><td class="look" id="look">查看</td><td class="give">放弃</td><td class="submit"><a href="give_up/submit.php?id='.$result[0].'">提交</a></td></tr>';
			$result=mysql_fetch_row($resource);
		}
		echo $str;
	?>
</table>
<body>
<script>

		var sign35=false;
		var xc;
		var yc;
		var sign351=false;
		var sign352=false;
		function test()
			{
				$("#one")[0].innerText=event.clientX+" "+event.clientY;
				if(sign35==true&&sign351==true)
				{
					$(".see")[0].style.left=event.clientX-xc;
					$(".see")[0].style.top=event.clientY-yc;
				}
				else
				{
					if(sign35==true&&sign352==true)
					{
						$(".form")[0].style.left=event.clientX-xc;
						$(".form")[0].style.top=event.clientY-yc;
					}
				}
			}
(
function()
{					
	

	
	
		
		$(document).ready(
			function()
			{
	
	
		
				
				$(".look").click(function()
											{
												var xmlhttp;
												
												if (window.XMLHttpRequest)
												{// code for IE7+, Firefox, Chrome, Opera, Safari
													xmlhttp=new XMLHttpRequest();
												}
													else
												{// code for IE6, IE5
														xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
												}
												xmlhttp.open("get","../../../conf/give_up.php?id="+$(this).parent()[0].firstChild.innerText,true);
												xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
												xmlhttp.send(null);
												xmlhttp.onreadystatechange=function()
													{
														if (xmlhttp.readyState==4 && xmlhttp.status==200)
															{
																 var content=xmlhttp.responseText;
																 var text="<div class='see'><div id='show'>"+content+"</div> <div class='close'></div></div>";
																if(sign351==false)
																{
																$("div").remove(".form");
																sign352=false;
																//把352清除掉
																$("body").append(text);
																sign351=true;
																
																
																
																}
																//sign351==false 表示不存在
																//sign351==true 表示存在
																else
																{
																	$("#show")[0].innerText=content;
																}
																 $(".close").click(function()
																						{
																							$("div").remove(".see");
																							sign351=false;
																						}
																 )
																 $(".see").mousedown(function()
																						{
																							xc=event.clientX-$('.see').offset().left;
																							yc=event.clientY-$('.see').offset().top;
																							sign35=true;
																						}
																);
																$(".see").mouseup(function()
																						{
																							sign35=false;
																						}
																);
															}
													}
												
											}
				);
				
				$(".give").click(function()
											{
												var text="<div class='form'><form><textarea name='give_up' value='please don't give up' rows='4' cols='40'>really give up for "+$(this).parent()[0].firstChild.innerText+"</textarea><input type='submit' value='提交'></form><div class='close1'></div><div>";
										
												$("div").remove(".see");
												sign351=false;
												//先把sign351的移除
												$("body").append(text);
												sign352=true;
												$(".close1").click(function()
																			{
																				$("div").remove(".form");
																				sign352=false;
																			}
																	)
																	
												$(".form").mousedown(function()
												{
													xc=event.clientX-$('.form').offset().left;
													yc=event.clientY-$('.form').offset().top;
													sign35=true;
												}
												);
																$(".form").mouseup(function()
																						{
																							sign35=false;
																						}
																);
											}
				)
				
			}
		);
}
)();
</script>
</html>
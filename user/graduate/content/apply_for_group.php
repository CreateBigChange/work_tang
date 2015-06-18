<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb-2312" />
<script src="../../../js/jQuery.js"></script>
<style>
	img
	{
		width:300px;
		height:300px;
		float:left
	}
	.labratory
	{
		width:310px;
		float:left;
		height:450px;
		background:green;
		margin:2px;
	}
	.main
	{
		width:720px;
		float:left;
		
	}
	.speak
	{
		background:blue;
		width:200px;
		position: fixed;
		top:20px;
		right:10px;
	}
	.close
	{
		float:right;
	}
</style>
</head>
<?php
	$link=mysql_connect("localhost","root","1234") or die("链接失败".mysql_error());
	mysql_select_db("renwu",$link);
?>

<body>
<div class="main">
<?php
				$sql="select teacher,title,picture,name 
					from dgroup
					where name not in
					(
							select dgroup                   
							from xz                   
							where name='ww'
					)";
				$resource=mysql_query($sql);
				$result=mysql_fetch_row($resource);
				$rows=mysql_num_rows($resource);
				$str="";
				for($i=1;$i<=$rows;$i++)
				{
					$str.="<div class='labratory'><img src='img2/".$result['2']."'><div class='teacher'>teacher:".$result['0']."  |name:<span class='sp'>".$result['3']."</span></div><div class='introduction'>".$result['1']."</div></div>";
					$result=mysql_fetch_row($resource);
				}
				echo $str;
?>
</div>
</body>
<script>
	(function()
	{
		var sign=false;
		$(".labratory").click(function()
										{
											if(sign==false)
											{
												var text="<div class='speak'><div class='top'>apply for the <span class='name'>"+$(this).children(".teacher").children()[0].innerText+"</span> and why<div class='close'>**</div></div><div class='content'><form><textarea cols='30' rows='10'></textarea><br><input type='submit' value='ok'/></form></div></div>";
												$("body").append(text);
												sign=true;
												$(".close").click(function()
																		{
																			$("div").remove(".speak");
																			sign=false;
																		}
												);
												}
											else
											{
												$(".name")[0].innerText=$(this).children(".teacher").children()[0].innerText;
											}
										}
		)
	}
	)();
</script>
</html>
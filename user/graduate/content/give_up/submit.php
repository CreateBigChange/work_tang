<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
<script src="../../../../js/jQuery.js"></script>
</head>
<body>
<?php
echo $_GET['id'];
?>
<form action="upload.php" method="post" enctype="multipart/form-data">
<textarea cols="30" rows="20">说明</textarea><br>
<input type="hidden" name="id" value=<?PHP echo $_GET['id']?>>
<input type="hidden" name="MAX_FILE_SIZE" value="10000000">
please upload your codes:<br><div class="code_file"><input type="file" name="mycode[]" ><br></div><span><div class="code_add">增加</div><div class="code_reduce">减少</div></span><br>
please upload your man&info: <br> <div class="man_file"><input type="file" name="mytext[]" ><br></div><span><div class="man_add">增加</div><div class="man_reduce">减少</div></span><br>
finish date:<select name="year"><?php
		$str="";
		for($i=2000;$i<=2500;$i++)
		{
			$str.="<option value=".$i.">".$i."年</option>";
		}
		echo $str;
?>
</select>
<select name="month">
			<?php
				$str="";
				for($i=1;$i<=12;$i++)
				{
					$str.="<option value=".$i.">".$i."月</option>";
				}
				echo $str;
			?>
</select>
<select>
		<?php
			$str="";
			for($i;$i<=31;$i++)
			{
				$str.="<option value=".$i.">".$i."号</option>";
			}
			echo $str;
		?>
</select>
<input type="submit" value="提交"><br>
</form>
</body>
<script>
(function()
{
	$(".code_add").click(function()
						{
							var text='<div class="code_file"><input type="file" name="mycode[]" ><br></div>';
							$(this).before(text);
						}
	);
	$(".code_reduce").click(function()
								{
									$(".code_file").last().remove();
								}
	)
	
	$(".man_add").click(function()
						{
							var text='<div class="man_file"><input type="file" name="mytext[]" ><br></div>';
							$(this).before(text);
						}
	)
	$(".man_reduce").click(function()
								{
									$(".man_file").last().remove();
								}
	)
})();
</script>
</html>
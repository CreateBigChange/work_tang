<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head>
<?php
include "../../../conf/conf.php";
?>
<body>
<div>
	<div width="100%">
		<h1>最新任务</h1>
		<table border="1">
			<tr><td>任务ID</td><td>指导老师</td><td>title</td><td>startTime</td><td>endTime</td><td>grade</td><td colspan="2" align="center">操作</td></tr>
			<?php
				$sql="select id,teacher,title,pro_date,end_date,grade from new_task";
				$resource=mysql_query($sql);
				$result=mysql_fetch_row($resource);
				$rows=mysql_num_rows($resource);
				$str="";
				for($i=1;$i<=$rows;$i++)
				{
					$str.="<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td><td><a href='#'>查看</a></td><td><a href='#'>申请</a></td></tr>";
					$result=mysql_fetch_row($resource);
				}
				echo $str;
			?>
		</table>
	</div>
	<div id="mav"></div>
	<div width="100%">
		<h1>原来遗留任务</h1>
		<table border="1">
			<tr><td>任务ID</td><td>指导老师</td><td>title</td><td>startTime</td><td>endTime</td><td>grade</td><td colspan="2" align="center">操作</td></tr>
			<?php
				$sql="select id,teacher,title,pro_date,end_date,grade from no_reciver";
				$resource=mysql_query($sql);
				$result=mysql_fetch_row($resource);
				$rows=mysql_num_rows($resource);
				$str="";
				for($i=1;$i<=$rows;$i++)
				{
					$str.="<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td>g<td>".$result[5]."</td><td><a href='#'>查看</a></td><td><a href='#'>申请</a></td></tr>";
					$result=mysql_fetch_row($resource);
				}
				echo $str;
			?>
		</table>
	</div>
</div>
</body>
</html>

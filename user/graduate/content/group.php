<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-cn" />
<style>
td
{
	background
}
</style>
</head>
<body align="center">
<?php
$link=mysql_connect("localhost","root","1234") or die("链接失败".mysql_error());
mysql_select_db("renwu",$link);


//未接受任务的资源

$str="";
?>
<table align="center" border='1'>
<tr><td>teacher</td><td>title</td><td>name</td><td colspan=2>操作</td></tr>
<?php
session_start();
$sql="select teacher,title,dgroup.name 
from dgroup,xz 
where dgroup.name=xz.dgroup and idedenty='".$_SESSION['type']."' and xz.name=".$_SESSION['username'];
	$resource=mysql_query($sql);
	$num=mysql_num_rows($resource);
	$result=mysql_fetch_row($resource);
for($i=1;$i<=$num;$i++)
{
	
	$str.="<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td><a href='#'>退出</a></td><td><a href='#'>修改</a></td></tr>";
	$resource=mysql_query($sql);
}
echo $str;
?>
</table>

</body>
</html>
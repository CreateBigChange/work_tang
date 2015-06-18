<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<style>
.talk
{
 background:yellow;	
}
</style>
</head>
<?php
include "../../../conf/conf.php";
?>
<body>
<div id="div1">
<table>
<tr align="center"><td>浏览量</td><td>回复量</td><td>ID</td><td colspan="3" align="center"></td><td></td></tr>
<?php
				$sql="select look,replay,id,title from new_task union select look,replay,id,title from no_reciver union select look,replay,id,title from current_task";
				$resource=mysql_query($sql);
				$result=mysql_fetch_row($resource);
				$rows=mysql_num_rows($resource);
				$str="";
				for($i=1;$i<=$rows;$i++)
				{
					$str.='<tr align="center" id='.$i.'><td>'.$result[0].'</td><td>'.$result[1].'</td><td>'.$result[2].'</td><td colspan="3" align="center">'.$result[3].'</td><td class="talk"><a href="./discuss/index.php?id='.$result[2].'">评论</a></td></tr>';

					$result=mysql_fetch_row($resource);
				}
				echo $str;
?>
</table>
</div>
</body>
</html>
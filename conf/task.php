<?php
$link=mysql_connect("localhost","root","1234") or die("链接失败".mysql_error());
mysql_select_db("renwu",$link);



//print_r (mysql_fetch_array($result));
function add($sql,$m1,$m2,$m3)
{
	$result=mysql_query($sql);
	$rows=mysql_num_rows($result);

		for($i=0;$i<$rows;$i++)
		{
			$row = mysql_fetch_array($result);
			$ary[$i][$m1] = $row[0];
			$ary[$i][$m2] = $row[1];
			$ary[$i][$m3] = $row[2];
		}

return $ary;
}
if($_GET['id']=="yq")
$pro=add("select id,title,grade from no_reciver","id","title","grade");
if($_GET['id']=="zz")
$pro=add("select id,title,grade from current_task","id","title","grade");
if($_GET['id']=="zx")
$pro=add("select id,title,grade from new_task","id","title","grade");
if($_GET['id']=="td")
$pro=add("select num,name,introduction from team","num","name","introduction");
if($_GET['id']=="zm")
$pro=add("select id,people,introduction from zhaomu","id","people","introduction");
echo json_encode($pro); 
?>
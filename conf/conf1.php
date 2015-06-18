<?php
$link=mysql_connect("localhost","root","1234") or die("链接失败".mysql_error());
mysql_select_db("renwu",$link);



//print_r (mysql_fetch_array($result));
function add($str)
{
	$sql="select name , password from ".$str;
	$result=mysql_query($sql);
	$rows=mysql_num_rows($result);
	for($i=0;$i<$rows;$i++)
	{
		$row = mysql_fetch_array($result);
		$ary[$i]['name'] = $row[0];
		$ary[$i]['password'] = $row[1];
	}
	return $ary;
}

$student=Array();
$teacher=Array();
$graduate=Array();
$teacher = add("teacher",$teacher);
$student = add("student",$student);
$graduate = add("graduate",$graduate);


$data=Array();
$data['student']=$student;
$data['teacher']=$teacher;
$data['graduates']=$graduate;
echo json_encode($data); 
?>
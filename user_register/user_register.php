<html>
<head><title>用户注册</title></head>
<body>
<?php
include "../conf/conf.php";
function __autoload($ClassName)
{
	include(ucfirst($ClassName)."_class.php");//自动加载相关的类
}
?>
<center>
<a href="user_register.php?action=1">本科生</a>
<a href="user_register.php?action=2">研究生</a>
<a href="user_register.php?action=3">老师</a>
</center>
<?php
if(isset($_POST["ok"]))
{
	print_r($_POST);
	if($_POST['occupation']==1)
	{
		$sql='insert into student values
		(
			"'.$_POST["name"].'",
			"'.$_POST["password"].'",
			"'.$_POST["school_number"].'",
			"'.$_POST["email"].'",
			"'.$_POST["qq"].'",
			"'.$_POST["phone"].'",
			"'.$_POST["sex"].'",
			"'.$_POST["d_teacher"].'",
			"'.$_POST["gup"].'",
			"'.$_POST["ground"].'"
		)';
	}
	if($_POST['occupation']==2)
	{
		$sql='insert into graduate values
		(
			"'.$_POST["name"].'",
			"'.$_POST["password"].'",
			"'.$_POST["email"].'",
			"'.$_POST["phone"].'"
		)';
	}
	if($_POST['occupation']==3)
	{
		$sql='insert into teacher values
		(
			"'.$_POST["name"].'",
			"'.$_POST["password"].'",
			"'.$_POST["email"].'",
			"'.$_POST["phone"].'",
			"'.$_POST["t_number"].'",
			"'.$_POST["w_number"].'"
		)';
	}
	$result=mysql_query($sql);
}	
else
{
	if(isset($_REQUEST['action']))
	{
		switch($_REQUEST['action'])
		{
			case 1:
				$form=new form("本科生",$_REQUEST,"user_register.php");
				echo $form;
					break;
			case 2:
				$form=new form("研究生",$_REQUEST);
				echo $form;
					break;
			case 3:
				$form=new form("老师",$_REQUEST);
				echo $form;
					break;
			default :
				echo "select one!";
		}
	}	
	else
		echo "select one!";
}
?>
</body>
</html>
<?php
echo $_POST['id'];
print_r($_FILES);
echo count($_FILES['mycode']['name']);
echo count($_FILES['mytext']['name']);
for($i=0;$i<count($_FILES['mycode']['name']);$i++)
	{
		if($_FILES['mycode']['name'][$i]!="")
		{
			if($_FILES['mycodde']['error'][$i]>0)
				{
					echo "上传有错误!";
					switch ($_FILES['mycodde']['error'][$i])
					{
						
						case 1:
						echo "上传文件超出php的固定值";
						break;
						case 2:
						echo "上传文件超出表单的固定值";
						break;
						case 3:
						echo "文件部分上传";
						break;
						case 4:
						echo "没有上传任务文件";
						break;
					}
					exit;
				}
			
			list($maintype,$subtype)=explode("/",$_FILES['mycode']['type'][$i]);
			session_start();
			$upfile='./uploads/'.$_POST['id']."/".$_SESSION['type']."-".$_SESSION['username']."/".time().$_FILES['mycode']['name'][$i];
			
		}
	}
?>
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
					echo "�ϴ��д���!";
					switch ($_FILES['mycodde']['error'][$i])
					{
						
						case 1:
						echo "�ϴ��ļ�����php�Ĺ̶�ֵ";
						break;
						case 2:
						echo "�ϴ��ļ��������Ĺ̶�ֵ";
						break;
						case 3:
						echo "�ļ������ϴ�";
						break;
						case 4:
						echo "û���ϴ������ļ�";
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
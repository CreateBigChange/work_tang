
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb='http://open.weibo.com/wb' lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb-2312" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>???? - ???θ</title>
<meta content="????" name="keywords" />
<meta content="????ú??????ì??в?ì??????????????c???f?????b???b????????c" name="description" />

<meta name="author" content="Administrator" />
</head>
<body>
<form>
the task help<br>
<textarea rows="3" cols="20"></textarea><br>
the task ask<br>
<textarea rows="3" cols="20"></textarea><br>
完成的时间<br>
<select size="1">
<?php
for($i=2000;$i<=2050;$i++)
{
	echo '<option value="'.$i.'">'.$i.'年</option>';
}
echo "</select><select size='1'>";

for($i=1;$i<=12;$i++)
{
	echo '<option value="'.$i.'">'.$i.'月</option>';
}
echo "</select><select size='1'>";
for($i=1;$i<=31;$i++)
{
	echo '<option value="'.$i.'">'.$i.'日</option>';
}

?>
</select>
<br><input type="submit" value="提交">
</form>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="Content-Language" content="zh-cn" />
<link rel="StyleSheet" href="../../css/teacher.css" type="text/css"> 
</head>
<body>
<div class="top"><img src="../../img/1.jpg" style="width:50px;height:50px;"> <h2>Hi,<script>document.write(localStorage.getItem("usertype")+":");document.write(localStorage.getItem("username"));</script> 欢迎进入后台管理</h2></div>
<div class="time">当前时间:<span id="time">aaa</span></div>
<div class="ziliao"><a href="">论坛</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="">修改个人资料</a></div>
</body>
<script>
	function Time()
	{
		var time = document.getElementById("time");
		time.innerText=Date();
	}
setInterval(Time,500);
</script>
</html>
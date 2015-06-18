<html>
</head>
<link rel="StyleSheet" href="../../css/teacher.css" type="text/css"> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="Content-Language" content="zh-cn" />
</head>
<body>
<div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">任务管理</span>
	<div>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">搜索任务</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">申请任务</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">讨论任务</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">放弃任务</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">提交任务</span></span>
	</div>
</div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">实验室</span>
	<div>	
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">搜索</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">申请进入</span></span>
		</div>
</div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">小组</span>
	<div>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">所在小组</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">申请</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">搜索</span></span>
		</div>
</div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">个人信息</span>
	<div>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">修改</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">显示</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">个人简介</span></span>
	</div>
</div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">其他</span>
	<div>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">天气</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">新闻</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">地图</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">公告</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">进入论坛</span></span
	</div>
</div>
<script src="../../js/jQuery.js"></script>
<script src="../../js/student_menu.js"></script>
<script>
function test()
{
$(this).next().fadeToggle();
}
function down()
{

	$(this).addClass("down");
	
}
function up()
{
	$(this).removeClass("down");
}

$(".menu")[0].onclick=test;
$(".menu")[0].onmousedown=down;
$(".menu")[0].onmouseup=up;

$(".menu")[1].onclick=test;
$(".menu")[1].onmousedown=down;
$(".menu")[1].onmouseup=up;

$(".menu")[2].onclick=test;
$(".menu")[2].onmousedown=down;
$(".menu")[2].onmouseup=up;

$(".menu")[3].onclick=test;
$(".menu")[3].onmousedown=down;
$(".menu")[3].onmouseup=up;

$(".menu")[4].onclick=test;
$(".menu")[4].onmousedown=down;
$(".menu")[4].onmouseup=up;

</script>
</body>
</html>
<html>
</head>
<link rel="StyleSheet" href="../../css/teacher.css" type="text/css"> 
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta http-equiv="Content-Language" content="zh-cn" />
</head>
<body>
<div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">�������</span>
	<div>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">��������</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">��������</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">��������</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">��������</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">�ύ����</span></span>
	</div>
</div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">ʵ����</span>
	<div>	
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">����</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">�������</span></span>
		</div>
</div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">С��</span>
	<div>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">����С��</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">����</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">����</span></span>
		</div>
</div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">������Ϣ</span>
	<div>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">�޸�</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">��ʾ</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">���˼��</span></span>
	</div>
</div>
<div>
	<span class="menu"><img src="../../img/one.jpg" style="width:20px;height:20px;">����</span>
	<div>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">����</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">����</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">��ͼ</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">����</span></span>
		<span class="menu1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="menu2">������̳</span></span
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
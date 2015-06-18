<?php
class form
{
private $formname;
private $request;
private $action;
private $method;
private $target;
function __construct($formname,$request,$action="user_register.phP",$method="post",$target="_self")
{
	$this->formname=$formname;
	$this->request=$request;
	$this->action=$action;
	$this->method=$method;
	$this->target=$target;
}
function __toString()
{
	$str="";
	$str='<table align=center border=0 width=400>';
	$str.='<caption><h3>'.$this->formname.'</h3></caption>';
	$str.='<form action="' .$this->action. '"method="'.$this->method.'"target="'.$this->target.'">';
	switch($this->request['action'])//判断用户是角色1表示学生2表示研究生3表示教师
	{
		case 1:
		$str.='<tr><td>姓名</td><td><input type="text" name="name"></td></tr>';//name
		$str.='<tr><td>密码</td><td><input type="password" name="password"></td></tr>';//password
		$str.='<tr><td>学号/td><td><input type="text" name="school_number"></td></tr>';//school_number
		$str.='<tr><td>邮箱</td><td><input type="text" name="email"></td></tr>';//email
		$str.='<tr><td>QQ</td><td><input type="text" name="qq"></td></tr>';//qq
		$str.='<tr><td>电话</td><td><input type="text" name="phone"></td></tr>';//phone
		$str.='<tr><td>性别</td>
		<td>
		<input type="radio" name="sex" value="1">男
		<input type="radio" name="sex" value="2">女
		<input type="radio" name="sex" value="3">保密
		</td>
		</tr>';//sex 1:男 2:女 3:保密
		$str.='<tr><td>指导老师</td><td><input type="text" name="d_teacher"></td></tr>';//d_teacher
		$str.='<tr><td>年级</td><td>
		<select name="gup">
		<option value="1">大一</option>
		<option value="2">大二</option>
		<option value="3">大三</option>
		<option value="4">大四</option>
		</select>
		</td></tr>';//gup 1:大一 2:大二 3:大三 4:大四
		$str.='<tr><td>所在团体</td><td><input type="text" name="ground"></td></tr>';//ground
		break;
		case 2:
		$str.='<tr><td>姓名:</td><td><input type="text" name="name"></td></tr>';//name
		$str.='<tr><td>密码:</td><td><input type="password" name="password"></td></tr>';//password
		$str.='<tr><td>邮箱:</td><td><input type="text" name="email"></td></tr>';//email
		$str.='<tr><td>电话:</td><td><input type="text" name="phone"></td></tr>';//phone
		break;
		case 3:
		$str.='<tr><td>姓名:</td><td><input type="text" name="name"></td></tr>';//name
		$str.='<tr><td>密码:</td><td><input type="password" name="password"></td></tr>';//password
		$str.='<tr><td>邮箱:</td><td><input type="text" name="email"></td></tr>';//email
		$str.='<tr><td>电话:</td><td><input type="text" name="phone"></td></tr>';//phone
		$str.='<tr><td>职工编号:</td><td><input type="text" name="t_number"></td></tr>';//t_number
		$str.='<tr><td>办公室编号:</td><td><input type="text" name="w_number"></td></tr>';//w_number
		break;
	}
	$str.='<input type="hidden" name="occupation" value="'.$this->request["action"].'"> ';
	$str.='<tr><td colspan="2" align="center"><input type="submit" value="OK" name="ok">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="reset"></td></tr></form></table>';
	return $str;
}

}
?>
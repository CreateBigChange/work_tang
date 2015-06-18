<?php
class student extends penson
{
	public ground;//年级
	public gup;//所在组
	public	d_teacher;//指导老师
	public qq;
	public phone;
	public sex;
	function __construct($name,$password,$email,$ocupation,$qq,$phone,$sex,$d_teacher,$gru,$ground)
	{
		$this->name=$name;
		$this->password=$password;
		$this->email=$email;
		$this->ocupation=$ocupation;
		$this->qq=$qq;
		$this->phone=$phone;
		$this->sex=$sex;
		$this->d_teacher=$d_teacher;
		$this->gup=$gup;
		$this->ground=$ground;
	}
}
?>
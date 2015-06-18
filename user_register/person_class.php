<?php
class person
{
	public $name;
	public $password;
	public $email;
	public $ocupation;//职位 包括:本科生，研究生，教师
	function __construct($name,$password,$email,$ocupation)
	{
		$this->name=$name;
		$this->password=$password;
		$this->email=$email;
		$this->ocupation=$ocupation;
	}
}
?>
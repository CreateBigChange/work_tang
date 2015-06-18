<?php
class teacher extends person
{
public $t_number;//教职工编号
public $w_number;//办公室编号
public $number//手机号
function __construct($name,$password,$email,$ocupation,$t_number,$w_number,$number)
	{
		$this->name=$name;
		$this->password=$password;
		$this->email=$email;
		$this->ocupation=$ocupation;
		$this->t_number=$t_number
		$this->w_number=$w_number;
		$this->number=$number;
	}
}
?>
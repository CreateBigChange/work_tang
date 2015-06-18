<?php
class Graduate_class extends person
{
	public $phone;
	function __construct($name,$password,$email,$ocupation,$phone)
	{
		$this->name=$name;
		$this->password=$password;
		$this->email=$email;
		$this->ocupation=$ocupation;
		$this->phone=$phone;
	}
}
?>
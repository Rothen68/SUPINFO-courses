<?php

class User
{
	private $id;
	private $lastname;
	private $firstname;
	private $email;
	private $password;
	private $privateAttr = array('id', 'lastname', 'firstname');

	public function __construct($id, $lastname, $firstname, $email, $password)
	{
		$this->id = $id;
		$this->lastname = $lastname;
		$this->firstname = $firstname;
		$this->email = $email;
		$this->password = $password;
	}

	public function __get($varname)
	{
		return $this->{$varname};
	}

	public function __set($varname, $value)
	{
		$this->$varname = $value;
	}
}
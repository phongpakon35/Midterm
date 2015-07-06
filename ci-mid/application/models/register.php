<?php

class Register extends CI_model
{
	var $id;
	var $name;
	var $email;
	var $username; 
	var $password;
	var $repassword; 




	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	
	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

		
	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

		public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}

		public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setRepassword($repassword)
	{
		$this->repassword = $repassword;
	}

	public function getRepassword()
	{
		return $this->repassword;
	}


###################################### add ######################################
	public function add()
	{
		$array = array
		(
	
			'name'  => $this->getName(),
			'email' => $this->getEmail(),
			'username' => $this->getUsername(),
			'password' => $this->getPassword(),
			'repassword' => $this->getRepassword()

			
		);

		$this->db->insert('member', $array);
	}
	###################################### add ######################################
}
?>
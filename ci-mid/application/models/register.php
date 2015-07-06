<?php

class Registerz extends CI_model
{
	var $id;
	var $name;
	var $picture;


	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	###### SET : Id () ######
	function setId($Id)
	{
		$this->Id = $Id;
	}

	###### GET : Id () ######
	function getId()
	{
		return $this->Id;
	}
	###### SET : Name () ######
	function setName($Name)
	{
		$this->Name = $Name;
	}

	###### GET : Name () ######
	function getName()
	{
		return $this->Name;
	}
	###### SET : Picture () ######
	function setPicture($Picture)
	{
		$this->Picture = $Picture;
	}

	###### GET : Picture () ######
	function getPicture()
	{
		return $this->Picture;
	}
	
	


###################################### findByPk ######################################

	function findByPk($pk)
	{
		$query=$this->db->query
			('
				SELECT name,picture WHERE id LIKE "%'. $pk .'%"
			');
			
		return $query;
	}
###################################### findByPk ######################################


###################################### findByAll ######################################

	function findByAll($All)
	{
		$query=$this->db->query
			('
				SELECT id,name,picture  FROM member WHERE id  
			');
			
		return $query;
	}
###################################### findByAll ######################################


###################################### update ######################################

	public function update()
	{
		$data = array(
				'id'=>$this->getId(),
				'name'=>$this->getName(),
				'picture'=>$this->getPicture()
       
					  );
	
		$this->db->where('id', $this->getId());
		$this->db->update('member', $data);
	}

###################################### update ######################################


###################################### delete ######################################

	public function delete()
	{
			$array=array(
				'id'=>$this->getId()

				);
		$this->db->delete('member',$array);
	}
	
###################################### delete ######################################

###################################### add ######################################
	public function add()
	{
		$array = array
		(
			'id' => $this->getId(),
			'name'  => $this->getName(),
			'picture' => $this->getPicture()
			
		);

		$this->db->insert('member', $array);
	}
	###################################### add ######################################
}
?>
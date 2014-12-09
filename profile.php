<?php

class Profile
{
	public $_firstname;
	public $_middlename;
	public $_lastname;
	public $_birthdate;

	public function __construct($firstname, $middlename, $lastname, $birthdate)
  	{
      $this->_firstname = $firstname;
      $this->_middlename = $middlename;
      $this->_lastname = $lastname;
	  $this->_birthdate = $birthdate;
	}
 
	public function __get($property) 
	{
		if (property_exists($this, $property)) 
		{
      		return $this->$property;
    	}
  	}

	public function __set($property, $value) 
	{
    	if (property_exists($this, $property)) 
    	{
      		$this->$property = $value;
    	}

    	return $this;
  	}
 
	public function setFirstName($newval)
    {
      $this->_firstname = $newval;
  	}
 
	public function getFirstName()
	{
		return $this->_firstname;
	}
 
 	public function setMiddleName($newval)
    {
      $this->_middlename = $newval;
  	}
 
	public function getMiddleName()
	{
		return $this->_middlename;
	}
 
 	public function setLastName($newval)
    {
      $this->_lastname = $newval;
  	}
 
	public function getLastName()
	{
		return $this->_lastname;
	}
 
  	public function setBirthDate($newval)
    {
      $this->_birthdate= $newval;
  	}
 
	public function getBirthDate()
	{
		return $this->_birthdate;
	}
 
   	public function changeJob($newjob)
	{
	      $this->_job = $newjob;
	}
	 
	public function happyBirthday()
	{
	      ++$this->_age;
	}
}

?>

<?php

class Profile
{
  public $alphas = range('A', 'Z');
  public $hebChalNums = array(1,2,3,4,5,8,3,5,1,1,2,3,4,5,7,8,1,2,3,4,6,6,6,5,1,7);
  public $hebChalCons = array(2,3,4,8,3,5,1,2,3,4,5,8,1,2,3,4,6,6,5,7);
  public $hebChalVowels = array(1,5,1,7,6);
  public $consonants = array('B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z');
  public $vowels = array('A', 'E', 'I', 'O', 'U');
  public $numbers = array(1,2,3,4,5,6,7,8,9);
  
  private $_name;
  private $_job;
  private $_age;
  
 
  public function __construct($name, $job, $age)
  {
      $this->_name = $name;
      $this->_job = $job;
      $this->_age = $age;
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

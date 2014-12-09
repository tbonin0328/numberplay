<?php 

	require_once('methods.php');
	require_once('profile.php');

	global $alphas;
	global $hebChalNums;
	global $hebChalCons;
	global $hebChalVowels;
	global $consonants;
	//global $letters;
	global $vowels;
	global $numbers;
	global $currentMonth;
	global $currentDay;
	global $currentYear;
	global $birthsplit;

	$alphas = range('A', 'Z');
	$hebChalNums = array(1,2,3,4,5,8,3,5,1,1,2,3,4,5,7,8,1,2,3,4,6,6,6,5,1,7);
	$hebChalCons = array(2,3,4,8,3,5,1,2,3,4,5,8,1,2,3,4,6,6,5,7);
	$hebChalVowels = array(1,5,1,7,6);
	//$letters = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Z');
	$consonants = array('B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z');
	$vowels = array('A', 'E', 'I', 'O', 'U');
	$numbers = array(1,2,3,4,5,6,7,8,9);
	
	$currentMonth = date('n');
	$currentDay = date('j');
	$currentYear = date('Y');
	
	function makeProfile()
	{
		if(isset($_POST['FirstName'])) 
		{
			$strFirst = strtoupper ($_POST['FirstName']);
			$strMiddle = strtoupper ($_POST['MiddleName']);
			$strLast = strtoupper ($_POST['LastName']);
			$birthdate  = $_POST['BirthDate'];
		
			$profile = new Profile($strFirst, $strMiddle, $strLast, $birthdate);
			return $profile;
		}	
	}
	
	function makeFirstNameArray($profile)
	{
		$arrFirst = str_split($profile->getFirstName());
		return $arrFirst;
	}
	
	function makeMiddleNameArray($profile)
	{
		$arrMiddle = str_split($profile->getMiddleName());
		return $arrMiddle;
	}
	
	function makeLastNameArray($profile)
	{
		$arrLast = str_split($profile->getLastName());
		return $arrLast;
	}
	
	function makeFirstMiddleArray($profile)
	{
		$arrFirstMiddle = array_merge(makeFirstNameArray($profile), makeMiddleNameArray($profile));
		return $arrFirstMiddle;
	}
	
	function makeAllArray($profile)
	{
		$arrAll = array_merge(makeFirstMiddleArray($profile), makeLastNameArray($profile));
		return $arrAll;
	}
	
	function getNumLetters($arrAll, $letters)
	{	
		$numLetters = countElements($arrAll, $letters);
		return $numLetters;
	}
	
	function splitBirthDate($profile)
	{
		$birthsplit = explode("/", $profile->getBirthDate());
		return $birthsplit;
	}
	
	function getMonth($profile)
	{
		$month = substr($profile->getBirthDate(), 0, 2);
		return $month; // create birth month variable
	}
	
	function getDay($profile)
	{
		$day= substr($profile->getBirthDate(), 3, 2);
		return $day; // create birth month variable
	}
	
	function getYear($profile)
	{
		$year= substr($profile->getBirthDate(), 6, 4);
		return $year; // create birth month variable
	}
	// $day = intval($birthsplit[1]); // create birth month variable
	// $year = intval($birthsplit[2]); // create birth month variable
	// $yearRoot = getRootOnly($year);
	// $lifeLesson = ($month + $day + $yearRoot);
	// $lifeLessonRoot = getRoot($lifeLesson); 03/28/1969
// 	
	// $currentMonth = date('n');
	// $currentDay = date('j');
	// $currentYear = date('Y');
// 	
	// $personalYear = $month + $day + getRootOnly($currentYear);
	// $personalMonth = $personalYear + $currentMonth;
	// $personalDay = $personalYear + $currentMonth + $currentDay;
// 		

	function getNumerologyValue($profile, $nums, $letters)
	{
		$sum1 = sumNumArray(makeFirstNameArray($profile), $nums, $letters);
		$sum2 = sumNumArray(makeMiddleNameArray($profile), $nums, $letters);
		$sum3 = sumNumArray(makeLastNameArray($profile), $nums, $letters);
		return $sum1 + $sum2 + $sum3;
	}
?>


<?php include 'header.php'; 
// index.php 
?>

<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF'])); //this is the environment variable
?>
<div id="contentwrap"> 

<div id="content">

<?php

//$alphas = array(A,B,C,D,E,F,G,H,I,J,K,L,M,N,O,P,Q,R,S,T,U,V,W,X,Y,Z);
$alphas = range('A', 'Z');
$hebChalNums = array(1,2,3,4,5,8,3,5,1,1,2,3,4,5,7,8,1,2,3,4,6,6,6,5,1,7);
$hebChalCons = array(2,3,4,8,3,5,1,2,3,4,5,8,1,2,3,4,6,6,5,7);
$hebChalVowels = array(1,5,1,7,6);
$consonants = array('B','C','D','F','G','H','J','K','L','M','N','P','Q','R','S','T','V','W','X','Z');
$vowels = array('A', 'E', 'I', 'O', 'U');
$numbers = array(1,2,3,4,5,6,7,8,9);

$arrFirst = array();
$arrMiddle = array();
$arrLast = array();

$arrSums;

if(isset($_POST['FirstName'])) //_POST is a superglobal
//always want to use _POST on forms
{
	$strFirst = strtoupper ($_POST['FirstName']);
	$strMiddle = strtoupper ($_POST['MiddleName']);
	$strLast = strtoupper ($_POST['LastName']);
	
	$arrFirst = str_split($strFirst);
	$arrMiddle = str_split($strMiddle);
	$arrLast = str_split($strLast);
	
	$arrFirstMiddle = array_merge($arrFirst, $arrMiddle);
	$arrAll = array_merge($arrFirstMiddle, $arrLast);
	$numLetters = countElements($arrAll, $alphas);
	$numConsonants = countElements($arrAll, $consonants);
	$numVowels = countElements($arrAll, $vowels);
	
	$birthdate  = $_POST['BirthDate'];
	$birthsplit = explode("/", $birthdate);
	$month = intval($birthsplit[0]); // create birth month variable
	$day = intval($birthsplit[1]); // create birth month variable
	$year = intval($birthsplit[2]); // create birth month variable
	$yearRoot = getRootOnly($year);
	$lifeLesson = ($month + $day + $yearRoot);
	$lifeLessonRoot = getRoot($lifeLesson);
	
	$currentMonth = date('n');
	$currentDay = date('j');
	$currentYear = date('Y');
	
	$personalYear = $month + $day + getRootOnly($currentYear);
	$personalMonth = $personalYear + $month;
	$personalDay = $personalYear + $currentMonth + $currentDay;
		
	$sum1 = sumNumArray($arrFirst, $hebChalNums, $alphas);
	$sum2 = sumNumArray($arrMiddle, $hebChalNums, $alphas);
	$sum3 = sumNumArray($arrLast, $hebChalNums, $alphas);
	$destiny = $sum1 + $sum2 + $sum3;

	$sum4 = sumNumArray($arrFirst, $hebChalCons, $consonants);
	$sum5 = sumNumArray($arrMiddle, $hebChalCons, $consonants);
	$sum6 = sumNumArray($arrLast, $hebChalCons, $consonants);
	$outer = $sum4 + $sum5 + $sum6;
	
	$sum7 = sumNumArray($arrFirst, $hebChalVowels, $vowels);
	$sum8 = sumNumArray($arrMiddle, $hebChalVowels, $vowels);
	$sum9 = sumNumArray($arrLast, $hebChalVowels, $vowels);
	$soul = $sum7 + $sum8 + $sum9;
	
	$power = $destiny + $lifeLesson;

	echo '<h2>Comparison Report</h2>';
	echo '<div class=intro>';
	echo '<p>The following report is based on your name being ' . $_POST['FirstName'] . " " . $_POST['MiddleName'] . ' ' . $_POST['LastName'] . ', and your birth date being ' . $_POST['BirthDate'] . '.</p></div>';	
	
echo '<div id = "numbers1">';

echo '<table class="main"> <tr> <td>';
	
	makeRowTable("Name:", "inside2");
   	echo '<tr><td>';
	
	makeRowTable("Numerology:", "inside2");
   	echo '<tr><td>';
	
	makeRowTable("Consonants:", "inside2");
   	echo '<tr><td>';
   	
	makeRowTable("Vowels:", "inside2");
	echo '<tr><td>';
	
	makeRowTable("Life Lesson:", "inside2");
	echo '<tr><td>';
	
	makeRowTable("Counts", "inside4");
	echo '<tr><td>';
	
	makeRowTable("Letters:", "inside2");
	echo '<tr><td>';
	
	makeRowTable("Consonants:", "inside2");
	echo '<tr><td>';
	
	makeRowTable("Vowels:", "inside2");
	echo '<tr><td>';
	
	makeRowTable("Power Number:", "inside2");
 	echo '</td></tr></table></div>';

echo '<div id="numbers2">';	

//table for first, middle and last names start here	
echo '<table class="main"> <tr> <td>';	

	makeLetterTable($arrFirst);
   	echo '<td>';

	makeLetterTable($arrMiddle);
   	echo '<td>';
	
	makeLetterTable($arrLast);
    echo '</tr></table>';
	
//assigned numbers tables start here
	echo '<table class="main"><tr> <td>';
	
	makeNumTable($arrFirst, $hebChalNums, $alphas);
	echo '<td>';
	
	makeNumTable($arrMiddle, $hebChalNums, $alphas);
	echo '<td>';
	
	makeNumTable($arrLast, $hebChalNums, $alphas);
	echo '</tr></table>';

//make consonants table
	echo '<table class="main"><tr> <td>';
	
	makeNumTable($arrFirst, $hebChalCons, $consonants);
	echo '<td>';
	
	makeNumTable($arrMiddle, $hebChalCons, $consonants);
	echo '<td>';
	
	makeNumTable($arrLast, $hebChalCons, $consonants);
	echo '</tr></table>';
	
//make vowels table
	echo '<table class="main"><tr> <td>';
	
	makeNumTable($arrFirst, $hebChalVowels, $vowels);
	echo '<td>';
	
	makeNumTable($arrMiddle, $hebChalVowels, $vowels);
	echo '<td>';
	
	makeNumTable($arrLast, $hebChalVowels, $vowels);
	echo '</td></tr></table>';
		
	echo '<div id="datenumbers1">';	
	
	echo '<table class="main"><tr> <td>';

		makeDataTable($lifeLesson . $lifeLessonRoot, "inside5a");
		echo '<tr><td>';
		
		makeDataTable("", "inside4");
		echo '<tr><td>';
		
		makeDataTable($numLetters . getRoot($numLetters), "inside5");
		echo '<tr><td>';
		
		makeDataTable($numConsonants . getRoot($numConsonants), "inside5");
		echo '<tr><td>';
		
		makeDataTable($numVowels . getRoot($numVowels), "inside5");
		echo '<tr><td>';
		
		makeDataTable($power . getRoot($power), "inside5");
 	
 	echo '</td></tr></table></div>';
 	
	echo '<div id="datenumbers2">';	
	
	echo '<table class="main"><tr> <td>';

		makeTitleTable("Number:", "inside2");
		echo '<tr><td>';
		
		makeTitleTable("Times Each Number Appears:", "inside4a");
		echo '<tr><td>';

		makeTitleTable("Personal Year:", "inside2");
		echo '<tr><td>';
		
		makeTitleTable("Personal Month:", "inside2");
		echo '<tr><td>';
		
		makeTitleTable("Personal Day:", "inside2");
		echo '<tr><td>';
		
		makeTitleTable("General Year:", "inside2");
 	echo '</td></tr></table></div>';
 	
 	echo '<div id="datenumbers3">';	
	
	echo '<table class="main"><tr> <td>';

		makeOneToNine();
		echo '<tr><td>';
		
		countOneToNine(makeNumArray($arrAll, $hebChalNums, $alphas), $numbers);
		echo '<tr><td>';
		
		makeTitleTable($personalYear . getRoot($personalYear), "inside5b");
		echo '<tr><td>';
		
		makeTitleTable($personalMonth . getRoot($personalMonth), "inside5c");
		echo '<tr><td>';
		
		makeTitleTable($personalDay . getRoot($personalDay), "inside5c");
		echo '<tr><td>';
		
		makeTitleTable(getRootOnly($currentYear) . getRoot(getRootOnly($currentYear)), "inside5c");
 	
 	echo '</td></tr></table></div>
 	
 	</div>';	

	echo '<div id="numbers3">';
	
	echo '<table class="main"> <tr> <td>';
		
		makeRowTable("Totals", "inside3");
	   	echo '<tr><td>';
		
		makeRowTable($destiny . getRoot($destiny), "inside3");
	   	echo '<tr><td>';
		
		makeRowTable($outer . getRoot($outer), "inside3");
	   	echo '<tr><td>';
	   	
		makeRowTable($soul . getRoot($soul), "inside3");
 	echo '</td></tr></table></div>';
	
	echo '<div="calcsleft">';
	
	?> 
	
	
<?php
	echo '<br /><a href="' . THIS_PAGE . '">Reset</a> </div>';
}else {//show form; see closing bracket below form; that's how this works.

?>
<form action="<?=THIS_PAGE?>" method="post"> <!--we use a short tag here, no spaces-->
<h2>Time to Study Numbers!</h2>

<p>
This page allows you to test one numerology system (Hebrew-Chaldean) against another (Modern) to see if one yields more "interesting"
or "accurate" results than the other!
</p>
<p>
To "study" the difference, simply select any one of the numerological values featured in this site's numerological report, and run the 
program to see how often that patterns occurs for Hebrew-Chaldean Numerology vs. Modern Numerology!
</p>
<table class = "form"> 
	<tr> 
		<td class = "first"> Pick a Value to Study: </td> <td class = "second">
			 <select>
  					<option value="lifelesson" name = "LifeLesson">Life Lesson</option>
  					<option value="pathofdestiny" name = "PathOfDestiny">Path of Destiny</option>
  					<option value="outerpersonality" name="OuterPersonality">Outer Personality</option>
  					<option value="soul" name = "Soul">Soul</option>
  					<option value="power" name = "Power">Power</option>
			</select> 
			</td></tr>
	</table> <!--this last thing is the xhtml closer --> 
<input type="submit" />

</form>
<?php 
}

function makeRowTable($rowtitle, $class){
	echo '<table class=' . $class . '>';
	echo '<tr><td>';
	
	echo $rowtitle;

	echo '</td></tr></table></td></tr>';
}

function makeTitleTable($data, $class){
	echo '<table class=' . $class . '>';
	echo '<tr><td>';
	
	echo $data;

	echo '</td></tr></table></td></tr>';
}

function makeDataTable($data, $class){
	echo '<table class=' . $class . '>';
	echo '<tr><td>';
	
	echo $data;

	echo '</td></tr></table></td></tr>';
}

function makeNumTable($arr1, $arr2, $arr3) {
		
	echo '<table class="inside">';
	echo "<tr>";
	
	foreach ($arr1 as $letter)
	{
		if (in_array($letter, $arr3)){
			
	    	$numIndex = array_search($letter, $arr3);
			$numArray[] = $arr2[$numIndex];
	    	echo '<td>' . $arr2[$numIndex] . '</td>';
		}     
		else {
			echo '<td>' . "" . '</td>'; 
		}	   
	}
	
	echo '</table></td>';
}

function makeLetterTable($arr1){
	
	echo '<table class="inside">';
	echo "<tr>";

	foreach ($arr1 as $letter)
	{
	    echo '<td>' . $letter . '</td>';    
	}

   	echo '</table></td>';
}

function sumNumArray($arr1, $arr2, $arr3){
	
	$numArray = array();	
	
	foreach ($arr1 as $letter)
	{
		if (in_array($letter, $arr3))
		{
    	$numIndex = array_search($letter, $arr3);
		$numArray[] = $arr2[$numIndex];
		}
		else {
		$numArray[] = 0;
		}     
	}
	
	return array_sum($numArray);
}

function countElements($arr1, $arr2){
	
	$count = 0;
	
	foreach ($arr1 as $letter)
	{
		if (in_array($letter, $arr2))
		{
			$count++;
		}
		else {
		
		}     
	}
	
	return $count;
}

function makeVowelTable($arr1, $arr2, $arr3){
	
	$numArray = array();	
	
	foreach ($arr1 as $letter)
	{
    	$numIndex = array_search($letter, $arr3);
		$numArray[] = $arr2[$numIndex];     
	}
	
	return array_sum($numArray);
}

function getRoot($num){

	if ($num < 10 || $num == 11)
	{
		return "";
	}
	else {
	while ($num >= 10 && $num != 11){
	$sum = array_sum(str_split($num));
	$num = $sum;
	}	
	return "/" . $sum;
	}
	return 11;
}

function getRootOnly($num){

 	$sum = array_sum(str_split($num));
	
	return $sum;
}

function makeOneToNine(){
	
	echo '<table class="insidenb">';
	echo "<tr>";	
	
	for ($i = 1; $i < 10; $i++) {
	echo '<td>' . $i . '</td>';
	}
	
	echo '</tr></table></td>';
}

function makeNumArray($arr1, $arr2, $arr3){
	
	$numArray = array();	
	
	foreach ($arr1 as $letter)
	{
		if (in_array($letter, $arr3))
		{
    	$numIndex = array_search($letter, $arr3);
		$numArray[] = $arr2[$numIndex];
		}
		else {
		$numArray[] = 0;
		}     
	}
	
	return $numArray;
}

function countOneToNine($arr1, $arr2){
	
	echo '<table class="inside">';
	echo "<tr>";	
	$tmp = array_count_values($arr1);
	asort($tmp);
	
	foreach ($arr2 as $number)//for number in array of numbers 1 through 8
	{
		if(in_array($number, $arr1))//if the number is in the array of all numbers
		{
			echo '<td>' . $tmp[$number]. '</td>';//print number of times it shows
		}
		else 
		{
			echo '<td>' . 0 . '</td>';//else print zero
		}
	}
	echo '</tr></table></td>';
}
?>

<?php include 'footer.php'; ?>

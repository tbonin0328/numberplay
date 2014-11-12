<?php 

require 'inc_0700/config_inc.php'; #provides configuration, pathing, error handling, db credentials
$config->titleTag = THIS_PAGE; #Fills <title> tag. If left empty will fallback to $config->titleTag in config_inc.php  
$config->nav1 = $config->nav1; 

$sql = "select * from numerology_profiles";

#Fills <title> tag. If left empty will default to $PageTitle in config_inc.php  
$config->titleTag = 'Muffins made with love & PHP in Seattle';

#Fills <meta> tags.  Currently we're adding to the existing meta tags in config_inc.php
$config->metaDescription = 'Seattle Central\'s ITC280 Class Muffins are made with pure PHP! ' . $config->metaDescription;
$config->metaKeywords = 'Muffins,PHP,Fun,Bran,Regular,Regular Expressions,'. $config->metaKeywords;
/*
$config->metaDescription = 'Web Database ITC281 class website.'; #Fills <meta> tags.
$config->metaKeywords = 'SCCC,Seattle Central,ITC281,database,mysql,php';
$config->metaRobots = 'no index, no follow';
$config->loadhead = ''; #load page specific JS
$config->banner = ''; #goes inside header
$config->copyright = ''; #goes inside footer
$config->sidebar1 = ''; #goes inside left side of page
$config->sidebar2 = ''; #goes inside right side of page
$config->nav1["page.php"] = "New Page!"; #add a new page to end of nav1 (viewable this page only)!!
$config->nav1 = array("page.php"=>"New Page!") + $config->nav1; #add a new page to beginning of nav1 (viewable this page only)!!
*/

# END CONFIG AREA ---------------------------------------------------------- 


get_header(); #defaults to theme header or header_inc.php
// index.php 
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
	
	$selected_radio = $_POST['dbchange'];
	
	echo '<h2>Database Contents</h2>';
	echo '<div class=intro>';
	echo '<p>The following is a list of the names and birthdates in our database.</p></div>';	
	
	echo '<div>';
	
	if ($selected_radio == 'load'){
	loadEntries($strFirst, $strMiddle, $strLast, $month, $day, $year);
	}
	if ($selected_radio == 'delete'){
	deleteEntries($strFirst, $strMiddle, $strLast, $month, $day, $year);	
	}
	else{
		echo 'Something went wrong. Sorry!';
	}
	# connection comes first in mysqli (improved) function
	$result = mysqli_query(IDB::conn(),$sql) or die(trigger_error(mysqli_error(IDB::conn()), E_USER_ERROR));

	if(mysqli_num_rows($result) > 0)
	{//show results
		while($row=mysqli_fetch_assoc($result))
		{ //pull data from array
		    echo '<table class="inside">';
			echo "<tr><td>" . $row['FirstName'] . "</td>";
			echo "<td>" . $row['MiddleName'] . "</td>";
			echo "<td>" . $row['LastName'] . "</td>";
			echo "<td>" . $row['BirthMonth'] . "</td>";
			echo "<td>" . $row['BirthDay'] . "</td>";
			echo "<td>" . $row['BirthYear'] . "</td></tr></table>";
		}
	}else{//no records
    print '<div align="center">What! No names?  There must be a mistake!!</div>';
	}
	echo '</div>';
	
	@mysqli_free_result($result); # releases web server memory
	?> 
	
	
<?php
	echo '<br /><a href="' . THIS_PAGE . '">Reset</a> </div>';
}else {//show form; see closing bracket below form; that's how this works.

?>
<form action="<?=THIS_PAGE?>" method="post"> <!--we use a short tag here, no spaces-->
<h2>Load Your Name into Our Database!</h2>

<p>
This page allows you to load a name and birthdate into our research database. Just enter your the name and birthdate and hit "Load". 
</p>
<p>
<b>Note:</b>If we can't verify that the name and birthdate are valid and that they are yours (or that the person in question approves), the information will be deleted from the database.
</p>
<table class = "form"> 
	<tr> 
		<td class = "first"> First Name: </td> <td class = "second"><input type="text" name="FirstName" /> </td></tr>
	<tr>
		<td class = "first"> Middle Name: </td> <td class = "second"><input type="text" name="MiddleName" /> </td></tr>
	<tr>
		<td class = "first"> Last Name: </td> <td class = "second"><input type="text" name="LastName" /> </td></tr>
	<tr>
		<td class = "first"> Birth Date: </td><td class = "second"><input type="text" name="BirthDate" /> </td></tr>
	</table> <!--this last thing is the xhtml closer --> 
	<p class="two">
		<input type="radio" name="dbchange" value="load" checked>Load Info
		<br>
		<input type="radio" name="dbchange" value="delete">Delete Info
		<br>
		<input type="submit" name="loadreport" value="Submit"/>
	</p>
</form>
<?php 
}
	
function loadEntries($first, $middle, $last, $month, $day, $year){
	
	$servername = "numberplay.practice.dreamhosters.com";#provide default DB credentials here
	$username = "thobon4";
	$password = "Lovely11!";
	$dbname= "numberdb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO numerology_profiles VALUES (NULL, '$first', '$middle', '$last', '$month', '$day', '$year')";
	
	if ($conn->query($sql) === TRUE) {
	    echo "New record created successfully <br />";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}

function deleteEntries($first, $middle, $last, $month, $day, $year){
	
	$servername = "numberplay.practice.dreamhosters.com";#provide default DB credentials here
	$username = "thobon4";
	$password = "Lovely11!";
	$dbname= "numberdb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
		
	$sql = "DELETE FROM numerology_profiles WHERE FirstName='$first' AND MiddleName='$middle' AND LastName='$last' AND BirthMonth='$month'"; 
	
	if ($conn->query($sql) === TRUE) {
	    echo "Record deleted successfully <br />";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}



function showNameAndBirth($numtype, $num1, $num2){
	echo "<tr><td>" . $numtype . ": </td>";
	if ($num = $num2){
		echo "<td>Yes</td></tr>";
	}else {
		echo "<td>No</td></tr>";
	}
}

function makeValueTable(){
	echo '<table class="inside">';
	checkValue("Life Lesson", $selection, $lifelesson);
	checkValue("Path of Destiny", $selection, $destiny);
	checkValue("Outer Personality", $selection, $outer);
	checkValue("Soul", $selection, $soul);
	checkValue("Power", $selection, $power);
	echo '</table>';
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

<?php get_footer(); #defaults to theme header or footer_inc.php; ?>

<?php include 'header.php'; 
// index.php 
?>

<?php
define('THIS_PAGE',basename($_SERVER['PHP_SELF'])); //this is the environment variable
?>
<div id="contentwrap"> 

<div id="content">

<h2>Time to Play with Numbers!</h2>

<p>
Enter your birth name (as it appears on your birth certificate) and your birth date. Then, click "Go!" to get your personal numbers analysis!
</p>

<?php

$alphas = range('A', 'Z');
$hebChalNums = array(1,2,3,4,5,8,3,5,1,1,2,3,4,5,7,8,1,2,3,4,6,6,6,5,1,7);

$numArrayFirst = array();
$numArrayMiddle = array();
$numArrayLast = array();


if(isset($_POST['FirstName'])) //_POST is a superglobal
//always want to use _POST on forms
{
	$strFirst = strtoupper ($_POST['FirstName']);
	$strMiddle = strtoupper ($_POST['MiddleName']);
	$strLast = strtoupper ($_POST['LastName']);
	
	$arrFirst = str_split($strFirst);
	$arrMiddle = str_split($strMiddle);
	$arrLast = str_split($strLast);

echo '<div id = "numbers1">';
echo 'Name: </ br>';
echo 'Numerology </ br>';
echo 'Consonsants </ br>';
echo 'Vowels </ br> </div>';

echo '<div id="numbers2">';	
echo '<table class="main"> <tr> <td>';	
//table for first name starts here	
	echo '<table class="inside">';
	echo "<tr>";

	foreach ($arrFirst as $letter)
	{
	    echo '<td>' . $letter . '</td>';    
	}

   	echo '</table></td><td>';

//table for middle name starts here	
	echo '<table class="inside">';
	echo "<tr>";

	foreach ($arrMiddle as $letter)
	{
	    echo '<td>' . $letter . '</td>';    
	}

    echo '</table></td><td>';
	
//table for last name starts here	
	echo '<table class="inside">';
	echo "<tr>";

	foreach ($arrLast as $letter)
	{
	    echo '<td>' . $letter . '</td>';    
	}

    echo '</table></td></tr></table>';
	
	echo '</br />';
	
//assigned numbers tables start here
	echo '<table class="main"><tr> <td>';
	
//table for first name starts here	
	echo '<table class="inside">';
	echo "<tr>";

	foreach ($arrFirst as $letter)
	{
	    $numIndex = array_search($letter, $alphas); 
	    $numArrayFirst[] = $hebChalNums[$numIndex];
	    echo '<td>' . $hebChalNums[$numIndex] . '</td>';    
	}

    echo '</table></td><td>';

//table for middle name starts here	
	echo '<table class="inside">';
	echo "<tr>";

	foreach ($arrMiddle as $letter)
	{
	    $numIndex = array_search($letter, $alphas); 
		$numArrayMiddle[] = $hebChalNums[$numIndex];
	    echo '<td>' . $hebChalNums[$numIndex] . '</td>';      
	}

    echo '</table></td><td>';
	
//table for last name starts here	
	echo '<table class="inside">';
	echo "<tr>";

	foreach ($arrLast as $letter)
	{
	    $numIndex = array_search($letter, $alphas);
		$numArrayLast[] = $hebChalNums[$numIndex];
	    echo '<td>' . $hebChalNums[$numIndex] . '</td>';        
	}

    echo '</table></td></tr></table></div>';
	
	echo '<div id="numbers3">';
	
	echo '<table class="inside">';
	echo "<tr>";

	    echo '<td>' . array_sum($numArrayFirst) . '</td>';        
		echo '<td>' . array_sum($numArrayMiddle) . '</td>';    
		echo '<td>' . array_sum($numArrayLast) . '</td>';    
	
    echo '</table></td></tr></table></div>';
	
	
	echo '<div="calcsleft">';
	
	
	echo '</br />';
	echo '</br />';
	
	echo "Your name is " . $_POST['FirstName'] . " ";
	echo $_POST['MiddleName'] . " ";
	echo $_POST['LastName'] . "."?> <br />
	
	
<?php
	echo "You were born on " . $_POST['BirthDate'] . " ";
	echo '<br /><a href="' . THIS_PAGE . '">Reset</a> </div></div>';
}else {//show form; see closing bracket below form; that's how this works.

?>
<form action="<?=THIS_PAGE?>" method="post"> <!--we use a short tag here, no spaces-->
First Name: <input type="text" name="FirstName" /> <br />
Middle Name: <input type="text" name="MiddleName" /> <br />
Last Name: <input type="text" name="LastName" /> <br />
Birth Date: <input type="date" name="BirthDate" /> <br /> <!--this last thing is the xhtml closer --> 
<input type="submit" />

</form>

<?php 
}
?>

<?php include 'footer.php'; ?>

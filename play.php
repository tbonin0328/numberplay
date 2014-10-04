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

<p>
<?php

$alphas = range('A', 'Z');
$hebChalNums = array(1,2,3,4,5,8,3,5,1,1,2,3,4,5,7,8,1,2,3,4,6,6,6,5,1,7);

echo '<pre>';
print_r($alphas);
echo '</pre>';

echo '<pre>';
print_r($hebChalNums);
echo '</pre>';

if(isset($_POST['FirstName'])) //_POST is a superglobal
//always want to use _POST on forms
{
	$strFirst = strtoupper ($_POST['FirstName']);
	$strMiddle = strtoupper ($_POST['MiddleName']);
	$strLast = strtoupper ($_POST['LastName']);
	
	$arrFirst = str_split($strFirst);
	$arrMiddle = str_split($strMiddle);
	$arrLast = str_split($strLast);
	
echo '<table cellpadding="7" cellspacing="0"> <tr> <td>';	
//table for first name starts here	
	echo '<table border="1" cellpadding="7" cellspacing="0" style="border-collapse:collapse;">';
	echo "<tr>";

	foreach ($arrFirst as $letter)
	{
	    echo '<td align="center">' . $letter . '</td>';    
	}

    echo '</table> </td> <td>';

//table for middle name starts here	
	echo '<table border="1" cellpadding="7" cellspacing="0" style="border-collapse:collapse;">';
	echo "<tr>";

	foreach ($arrMiddle as $letter)
	{
	    echo '<td align="center">' . $letter . '</td>';    
	}

    echo '</table></td><td>';
	
//table for last name starts here	
	echo '<table border="1" cellpadding="7" cellspacing="0" style="border-collapse:collapse;">';
	echo "<tr>";

	foreach ($arrLast as $letter)
	{
	    echo '<td align="center">' . $letter . '</td>';    
	}

    echo '</table></td></table>';
	
	echo '</br />';
	
	echo '<table cellpadding="7" cellspacing="0"> <tr> <td>';	
//table for first name starts here	
	echo '<table border="1" cellpadding="7" cellspacing="0" style="border-collapse:collapse;">';
	echo "<tr>";

	foreach ($arrFirst as $letter)
	{
	    $numIndex = array_search($letter, $alphas); 
	    
	    echo '<td align="center">' . $hebChalNums[$numIndex] . '</td>';    
	}

    echo '</table> </td> <td>';

//table for middle name starts here	
	echo '<table border="1" cellpadding="7" cellspacing="0" style="border-collapse:collapse;">';
	echo "<tr>";

	foreach ($arrMiddle as $letter)
	{
	    echo '<td align="center">' . $letter . '</td>';    
	}

    echo '</table></td><td>';
	
//table for last name starts here	
	echo '<table border="1" cellpadding="7" cellspacing="0" style="border-collapse:collapse;">';
	echo "<tr>";

	foreach ($arrLast as $letter)
	{
	    echo '<td align="center">' . $letter . '</td>';    
	}

    echo '</table></td></table>';
	
	
	echo '</br />';
	echo '</br />';
	
	echo "Your name is " . $_POST['FirstName'] . " ";
	echo $_POST['MiddleName'] . " ";
	echo $_POST['LastName'] . "."?> <br />

<?php
	echo "You were born on " . $_POST['BirthDate'] . " ";
	echo '<br /><a href="' . THIS_PAGE . '">Reset</a>';
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
</p>

<?php include 'footer.php'; ?>

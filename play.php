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
if(isset($_POST['FirstName'])) //_POST is a superglobal
//always want to use _POST on forms
{
	$strFirst = strtoupper ($_POST['FirstName']);
	$strMiddle = strtoupper ($_POST['MiddleName']);
	$strLast = strtoupper ($_POST['LastName']);
	
	$arrFirst = str_split($strFirst);
	$arrMiddle = str_split($strMiddle);
	$arrLast = str_split($strLast);
	
	echo '<pre>';
	print_r($arrFirst);
	echo '</pre>';	
	
	echo '<pre>';
	print_r($arrMiddle);
	echo '</pre>';
	
	echo '<pre>';
	print_r($arrLast);
	echo '</pre>';
	
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

<p>
Proin at sapien arcu. Integer ut fermentum erat. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam odio quam, bibendum vitae lacinia ut, sodales ut turpis. Nullam dignissim urna vel risus condimentum in posuere nunc fermentum. 
</p>

<?php include 'footer.php'; ?>

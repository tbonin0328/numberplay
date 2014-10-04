<?php 
//contact.php - a contact form for my client
//$to = 'thomas.bonin@hotmail.com';//the person who gets the email
//$subject = 'Contact Form 000Webhost';//identify the contact form
//$noreply = 'noreply@000webhost.com';//noreplay email address

include 'header.php'; ?> 
<h1>Contact Us</h1> 

	<?php
	include 'contact.php';
	?>

<?php
//
//if(isset($_POST['Submit']))
//{//form data sent.. sent email!
//	/*echo '<pre>';
//	var_dump($_POST);
//	echo '</pre>';
//	*/
//	
//	$headers = 'From: ' . $noreply . PHP_EOL .
//   'Reply-To: ' . $_POST['Email'] . PHP_EOL .
//   'X-Mailer: PHP/' . phpversion();
//	
//   $text = stripslashes(process_post());
//   
//	$myReturn = mail($to,$subject,$text,$headers);
//	//$myReturn = mail('thomas.bonin@hotmail.com','Test Subject','text','noreply@000webhost.com');
//	
//	if($myReturn)
//	{//mail sent!
//		echo 'Mail sent!';
//	}else{//problem!
//		echo 'Mail error!';
//	}
//	
//}else{//show form!
//	echo //if type single quote, don't have to worry about double quotes 
//	//type, "email", comes from HTML 5
//	//the name attribute is the most important one because it's the one that
//	//gets sent to the post.
//	//naming the submit button submit so we don't have to think about it.
//	//name="Submit" gives us something to hang it on
//	//all types are lower case
//	
//		'
//	<form action="contact.php" method="post">
//	Name: <input type="text" required name="Name" /><br />
//	Email: <input type="email" required name="Email" /><br />
//	Comments:<textarea name="Comments"></textarea><br />
//	<input type="submit" name="Submit" value="Submit" />
//	</form>
//	';
//}
		  
include 'footer.php'; 

function process_post()
{//loop through POST vars and return a single string
    $myReturn = ''; //set to initial empty value

    foreach($_POST as $varName=> $value)
    {#loop POST vars to create JS array on the current page - include email
         $strippedVarName = str_replace("_"," ",$varName);#remove underscores
        if(is_array($_POST[$varName]))
         {#checkboxes are arrays, and we need to collapse the array to comma separated string!
             $myReturn .= $strippedVarName . ": " . implode(",",$_POST[$varName]) . PHP_EOL;
         }else{//not an array, create line
             $myReturn .= $strippedVarName . ": " . $value . PHP_EOL;
         }
    }
    return $myReturn;
}



?>

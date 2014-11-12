<?php 

require 'inc_0700/config_inc.php'; #provides configuration, pathing, error handling, db credentials
$config->titleTag = THIS_PAGE; #Fills <title> tag. If left empty will fallback to $config->titleTag in config_inc.php  
$config->nav1 = $config->nav1; 
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
<h2>Contact Us</h2> 

	<?php
	include 'contact.php';
	get_footer(); #defaults to theme header or footer_inc.php;

	?>
</div></div>
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

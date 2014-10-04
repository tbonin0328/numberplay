<?php
//config.php

//define('THIS_PAGE',basename($_SERVER['PHP_SELF']));
//basename strips off any folders, filenames; it gives the base name inside the folder

switch(THIS_PAGE)
{
	case "template.php":
	$title = "PROTECT OUR WATER";
	$banner = "Template Banner!";
	$background_image = "pics01.jpg";
	break;
	
	case "index.php":
	$title = "PROTECT OUR WATER";
	$banner = "Home Page Banner!";
	$background_image = "rainddrop.jpg";
	break;
	
	/*case "contactold.php":
	$title = "Contact Page!";
	$banner = "Contact Us Here!";
	$background_image = "christmas-trees.png";
	break;
	*/
	case "contactus.php":
	$title = "PROTECT OUR WATER";
	$banner = "Contact Us!";
	$background_image = "dam.jpg";
	break;
	
	/*case "disclaimer.php":
	$title = "Disclaimer!";
	$banner = "We Disclaim Everything!";
	$background_image = "treesfactory.jpg";
	break;
	*/
	/*case "survey.php":
	$title = "Customer Survey Page!";
	$banner = "Customer Survey!";
	$background_image = "trees-in-fall.jpg";
	break;
	*/
	case "demo_list.php":
	$title = "PROTECT OUR WATER";
	$banner = "City Rankings for Water Shortage Risk";
	$background_image = "ocean1.jpg";
	break;
	
	case "demo_view.php":
	$title = "PROTECT OUR WATER";
	$banner = "City Rankings for Water Shortage Risk";
	$background_image = "ocean1.jpg";
	break;
	
	default:
	$title = "AQUEOUS";
	$banner = "Welcome to Trees!";
	$background_image = "pics01.jpg";	
	
}

//echo THIS_PAGE;
//die; //halts execution of the file

$nav1 = array();
$nav1['index.php'] = "Home Page";
//$nav1['contactold.php'] = "Contact";
$nav1['contactus.php'] = "Contact";
//$nav1['disclaimer.php'] = "Disclaimer";
//$nav1['survey.php'] = "Survey";
$nav1['template.php'] = "Template";
$nav1['demo_list.php'] = "City Rankings";

/*
echo '<pre>';
var_dump($nav1);
echo '</pre>';

<li class="current"><a href="index.html">Home</a></li>
<li><a href="ourwork.html">Our Work</a></li>
<li><a href="testimonials.html">Testimonials</a></li>
<li><a href="projects.html">Projects</a></li>
<li><a href="contact.html">Contact Us</a></li>
*/

function makeLinks($nav1)
{
	$myReturn = "";
	foreach($nav1 as $link => $label)
	{
		if(THIS_PAGE == $link)
		{//current page add class
			echo '<li class="current_page_item"><a href="' . $link . '">' . $label . '</a></li>';
		}else{//no class
			echo '<li><a href="' . $link . '">' . $label . '</a></li>';
		}
	}
	
	return $myReturn;
}
?>
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

<h2>Example Article #1 - This is H2 Heading</h2>

<p>A page to use as a model for largely static web pages.</p>
<?php
//benchmarkNote("Test from index file!");
$config->benchNote = "Test From Index File!";

//echo $config->benchNote;die;

//dumpDie($config);
?>

<ul>
<li>Aliquam hendrerit elit in leo tempor eu molestie orci molestie. Morbi in dolor dolor</li>
<li>Class aptent taciti sociosqu ad litora torquent per conubia nostra</li>
<li>Integer sed condimentum orci. Aenean id quam a ipsum convallis tincidunt vitae quis</li>
</ul>
<p>
<?php

	// Name: Thomas Bonin
	
	$firstName = "Thomas";
	$lastName = "Bonin";
	$coffeeCompany = "Starbucks";
	$coffeeCost = 3.5;
	$coffeeTax = 1.15;
	$coffeeTotal = $coffeeCost + $coffeeTax;
	
	echo($firstName . " " . $lastName . "<br />");
	echo(" went to " . $coffeeCompany . " to buy a coffee for ". "$" . number_format($coffeeCost, 2) . " giving a total of " . "$" . number_format($coffeeTotal, 2) . "." . "<br />") ;
	if($coffeeTotal>4){
		echo("That's crazy! Stop the madness!");
	}
	else if($coffeeTotal>3){
		echo("Really? That much?");
	}
	
	else if($coffeeTotal>2){
		echo("This will add up.");
	}
	
	else if($coffeeTotal<=2){
		echo("That is a reasonable price.");
	}
	
	else {
		echo("Thank you for your time.");
	}
		
?>
</p>
<p>
Proin at sapien arcu. Integer ut fermentum erat. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam odio quam, bibendum vitae lacinia ut, sodales ut turpis. Nullam dignissim urna vel risus condimentum in posuere nunc fermentum. 
</p>

<?php get_footer(); #defaults to theme header or footer_inc.php; ?>

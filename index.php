<?php include 'header.php'; 
// index.php 
?>
<div id="contentwrap"> 

<div id="content">

<h2>Example Article #1 - This is H2 Heading</h2>

<p>
Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas dignissim consectetur porttitor. Integer sed condimentum orci. Aenean id quam a ipsum convallis tincidunt vitae quis lectus. Donec eros sapien, ultrices quis interdum eget, pulvinar et sem. Praesent vel felis nisl, eget volutpat dui. Vestibulum ac lorem massa, vitae blandit mauris.
</p>

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

<?php include 'footer.php'; ?>

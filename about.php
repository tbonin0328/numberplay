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

<h2>About the Creator of this Website</h2>

<p>NumberPlay was designed by Thomas Bonin, an autodidactic numerologist (whatever that means). Influenced by a strong musical background and a love of patterns of all kind, Mr. Bonin has been exploring the connections between words and numbers and their associated vibrations and meanings since his early 20's (he's now 45). This site combines Mr. Bonin's love of numbers with his passions for web design and computer programming. Please feel to reach out to Mr. Bonin through the contact link above if you have questions you'd like to ask or would like a personalized interpretation of your numerological profile.
</p>
</ br>
</ br>
<p>
	When you selected this page, you "drew" the number:
</p>
<?php
//benchmarkNote("Test from index file!");
$config->benchNote = "Test From Index File!";

//echo $config->benchNote;die;

//dumpDie($config);
?>

<?php

	// Name: Thomas Bonin
	
	$num = rand (0,9);
	
	echo '<p class="two"><font size="7" color="red">' . $num . '</font></p>';
	echo '<dl><dt><p class="two">The number ' . $num . ' signifies: </p>';
	echo'<dd><p class="two">';
	echo getNumInfo($num);
	echo "</p></dl>"
?>
<p>
	Refresh this page to "draw" an new number and its meaning.
</p>

<?php get_footer(); #defaults to theme header or footer_inc.php; ?>
 

<?php

function getNumInfo($num){
	if($num == 1){
		return "Independence. Respect. Being first. Courage. Leading.";
	}
	else if($num == 2){
		return "Cooperation. Submission. Following. Peeing (not really).";
	}
	else if($num == 3){
		return "Patriarchy. Expression. Creativity.";
	}
	else if($num == 4){
		return "Discipline. Practicality. Organization. Death (but only in China).";
	}
	else if($num == 5){
		return "Communication. Transportation. Androgyny. Sexuality. Transition. Travel.";
	}
	else if($num == 6){
		return "Strength. Beauty. Love. Community. Family. Nurturing.";
	}
	else if($num == 7){
		return "Spirituality. Analysis. Meditation. Aloneness. Introspection. Thought.";
	}
	else if($num == 8){
		return "Power. Worldliness. Grounding. Money. Meat(just kidding).";
	}
	else if($num == 9){
		return "Humanity. Service. Giving. Love. Conflict (some say). Endings. Renewal. Transition.";
	}
	else if($num == 0){
		return "Divinity. Guidance. Support. Nothingness.";
	}
	else {
		return "Something's not working right. Sorry.";
	}

}
	
?>
	


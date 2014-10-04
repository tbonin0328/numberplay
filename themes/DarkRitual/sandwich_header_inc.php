<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php include INCLUDE_PATH . 'meta_inc.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo THEME_PATH; ?>sandwich.css" media="screen"/>
</head>

<body>

<div class="container">

	<div class="header"><?=$config->banner;?></div>

	<!--
	<div class="main_right">

		<div class="padded">
			<?=$config->sidebar2;?>
		</div>
	</div>
	


	<div class="subnav">

		<h1>Links?</h1>
		<ul>
			<?php
			echo makeLinks($config->nav1,'<li>','</li>'); #link arrays are created in config_inc.php file
			?>
			
		</ul>


	</div>
	
	-->
		
	<div class="main">

		<div class="padded">
			<?=showFeedback();?>
			<!-- header stops here -->
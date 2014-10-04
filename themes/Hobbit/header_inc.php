<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php include INCLUDE_PATH . 'meta_inc.php'; ?>
<link rel="stylesheet" type="text/css" href="<?=THEME_PATH;?>default.css" media="screen"/>
</head>

<body>

<div class="container">

	<div class="gfx"><span></span></div>

	<div class="top">

		<div class="navigation">
		    <?php
		    echo makeLinks($config->nav1,'',''); #link arrays are created in config_inc.php file
		     ?>
			<!--
		     <a href="index.html" id="selected">home</a>
			<a href="index.html">the journey</a>
			<a href="index.html">characters</a>
			<a href="index.html">image gallery</a>
			<a href="index.html">history</a>
			-->
		</div>

		<div class="pattern"><span></span></div>

		<div class="header">
			<h1><?=$config->banner;?></h1>
			<p>Adventures of Bilbo Baggins</p>
		</div>

		<div class="pattern"><span></span></div>

	</div>

	<div class="content">

		<div class="spacer"></div>

		<div class="item">
		<?=showFeedback();?>
<!-- header ends here -->
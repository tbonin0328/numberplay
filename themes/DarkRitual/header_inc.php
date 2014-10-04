<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php include INCLUDE_PATH . 'meta_inc.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo THEME_PATH; ?>default.css" media="screen"/>
</head>

<body>

<div class="container">

	<div class="header"><?=$config->banner;?></div>

	<div class="main_right">

		<div class="padded">
			<?php echo $config->sidebar2; ?>
		
		    <!--
			<h1>Etiam placerat</h1>
			<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus. Donec mattis <a href="index.html">quam aliquam</a> risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero varius pede tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.</p>

			<h1>Maecenas</h1>
			<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus.</p>
			
			<h1>Lobortis</h1>
			<p>Interdum nec, metus. Maecenas ornare lobortis risus. Donec mattis quam aliquam risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero <a href="index.html">varius pede</a> tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.</p>
				-->
		</div>

	</div>

	<div class="subnav">

		<h1>Links?</h1>
		<ul>
			<!--
			<li><a href="index.html">pellentesque</a></li>
			<li><a href="index.html">sociis natoque</a></li>
			<li><a href="index.html">semper</a></li>
			<li><a href="index.html">convallis</a></li>
			-->
			<?php
			echo makeLinks($config->nav1,'<li>','</li>'); #link arrays are created in config_inc.php file
			
			?>
			
		</ul>


	</div>
		
	<div class="main">

		<div class="padded">
			<?=showFeedback();?>
			<!-- header stops here -->
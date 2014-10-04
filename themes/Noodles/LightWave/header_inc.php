<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
  <?php include INCLUDE_PATH . 'meta_inc.php'; ?>
  <link rel="stylesheet" type="text/css" href="<?=THEME_PATH;?>css/style.css" />
  <script type="text/javascript" src="<?=THEME_PATH;?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?=THEME_PATH;?>js/image_slide.js"></script>
  <script type="text/javascript" src="<?=THEME_PATH;?>js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="<?=THEME_PATH;?>js/jquery.lavalamp.min.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
</head>

<body>
  <div id="main">
    <div id="header">
	  <div id="banner">
	    <h1><?=$config->banner;?></h1>
	  </div><!--close banner-->
    </div><!--close header-->

	<div id="site_content">	
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
			<?=$config->sidebar2;?>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
      </div><!--close sidebar_container-->	
        
	  <div id="menubar">
        <ul class="lavaLampWithImage" id="lava_menu">
        <?php
        	echo makeLinks($config->nav1,'<li>','</li>');
        ?>
        
        <!--
          <li class="current"><a href="index.html">Home</a></li>
          <li><a href="ourwork.html">Our Work</a></li>
          <li><a href="testimonials.html">Testimonials</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          -->
        </ul>
      </div><!--close menubar-->
		
      <ul class="slideshow">
        <li class="show"><img width="880" height="450" src="<?=THEME_PATH;?>images/home_1.jpg" alt="&quot;Image description here&quot;" /></li>
        <li><img width="880" height="450" src="<?=THEME_PATH;?>images/home_2.jpg" alt="&quot;Image description here&quot;" /></li>
        <li><img width="880" height="450" src="<?=THEME_PATH;?>images/home_3.jpg" alt="&quot;Image description here&quot;" /></li>
      </ul>  
	 
	  <div id="content">
        <div class="content_item">
        <!-- header ends here -->
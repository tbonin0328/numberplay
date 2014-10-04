<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<?php include INCLUDE_PATH . 'meta_inc.php'; ?>
  <!--<title>ARaynorDesign Template</title>
  <meta name="description" content="free website template" />
  <meta name="keywords" content="enter your keywords here" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=9" />-->
  <link rel="stylesheet" type="text/css" href="<?=THEME_PATH;?>css/style.css" />
  <script type="text/javascript" src="<?=THEME_PATH;?>js/jquery.min.js"></script>
  <script type="text/javascript" src="<?=THEME_PATH;?>js/image_slide.js"></script>
</head>

<body>
  <div id="main">	
	<div id="site_content">
      <div id="site_heading">
	    <h1><?=$config->banner;?></h1>	
	    <h2><?=$config->slogan;?></h2>
	  </div><!--close site_heading-->
	  <div id="header">
	    <div id="menubar">
          <ul id="menu">
          <?php
          
          //echo makeLinks($config->nav1,'<li>','</li>'); #link arrays are created in config_inc.php file
          echo waterRipplesMenu($config->nav1,'<li>','</li>','<li class="current">');
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
      </div><!--close header-->	  			  
	  <div id="content">
	    
		<div id="banner_image">
          <ul class="slideshow">
            <li class="show"><img width="690" height="250" src="<?=THEME_PATH;?>images/slide1.jpg" alt="&quot;Image description here&quot;" /></li>
            <li><img width="690" height="250" src="<?=THEME_PATH;?>images/slide2.jpg" alt="&quot;Image description here&quot;" /></li>
          </ul>  
	    </div><!--close banner_image-->	  
		<?=showFeedback();?>
		<!-- TRYING TO REMOVE ITEM TO FIX!! <div class="content_item"> -->
		<!-- header ends here -->
		
		
<?php
//theme specific menu function: echo waterRipplesMenu('<li>','</li>','<li class="current">');
function waterRipplesMenu($linkArray,$prefix='',$suffix='',$classPrefix='',$separator="~")
{
	$myReturn = '';
	foreach($linkArray as $url => $text)
	{
		$target = ' target="_blank"'; #will be removed if relative URL
		if(basename($url) == THIS_PAGE){$flexPrefix = $classPrefix;}else{$flexPrefix = $prefix;} #added to create PageID
		$httpCheck = strtolower(substr($url,0,8)); # http:// or https://
		if(!(strrpos($httpCheck,"http://")>-1) && !(strrpos($httpCheck,"https://")>-1))
		{//relative url - add path
			$url = VIRTUAL_PATH . $url;
			$target = "";
		}else if(strrpos($url,ADMIN_PATH . 'admin_')>-1){$target = "";}# clear target="_blank" for admin files
		$pos = strrpos($text, $separator); #tilde as default separator
		if ($pos === false)
		{// note: three equal signs - not found!
			$myReturn .= $flexPrefix . "<a href=\"" . $url . "\"" . $target . ">" . $text . "</a>" . $suffix . "\n";
		}else{//found!  explode into title!
			$aText = explode($separator,$text); #split into an array on separator
			$myReturn .= $flexPrefix . "<a href=\"" . $url . "\" title=\"" . $aText[1] . "\"" . $target . ">" . $aText[0] . "</a>" . $suffix . "\n";	
		}
	}	
	return $myReturn;	
}


?>		
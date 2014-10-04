<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include INCLUDE_PATH . 'meta_inc.php'; ?>

<link rel="stylesheet" type="text/css" media="screen, projection" href="<?=THEME_PATH;?>menu.css" />
<link rel="stylesheet" type="text/css" media="screen, projection" href="<?=THEME_PATH;?>style.css" />

<style type="text/css">
<!--

div.wrap1 .wrap2 {
	/* only with left panel- background-image: url(img/bg1.gif); */
	/* right and left panel */ background-image: url(img/bg2.gif);
	/* only with right panel - background-image: url(img/bg3.gif); */
}

-->
</style>

</head>

<body>

<div class="wrap1">

	<div class="wrap2">

		<div class="logo">
		
		<div style="display:inline; float:left;">
			
			<?=$config->banner;?>
			<div class="slogan"><?=$config->slogan;?></div>
			
		</div>
		
		<div style="display:inline; float:right">
		
		<input type="text" />
		
		</div>
			
		</div>

		<div id="menu"> 
	 		<div class="menu">
           		<ul>
           		<?php
           		$prefix = '<li><span class="hlavny_">';
           		$suffix = '</span></li>';
           		$classPrefix = '<li><span class="left"></span><span class="hlavny">';
           		$classSuffix = '</span><span class="right"></span></li>';
           		$divider = '<li><img src="' . THEME_PATH . 'img/divider2.png" alt="" /></li>';
           		//echo FreePortal2MenuDivider($config->nav1,'<li>','</li>','<li class="selected">');
           		echo FreePortal2MenuDivider($config->nav1,$prefix,$suffix,$classPrefix,$classSuffix,$divider);
           		?>
           		
           		
           		 <!--
           			<li><span class="hlavny_"><a href="#">Home</a></span></li>
             		<li><img src="<?=THEME_PATH;?>img/divider2.png" alt="" /></li>
           			<li><span class="left"></span><span class="hlavny"><a href="#">Photos</a></span><span class="right"></span></li>
            		<li><img src="<?=THEME_PATH;?>img/divider2.png" alt="" /></li>
           		    <li><span class="hlavny_"><a href="#">About</a></span></li>
             		<li><img src="<?=THEME_PATH;?>img/divider2.png" alt="" /></li>
             		<li><span class="hlavny_"><a href="#" >Links</a></span></li>
             		<li><img src="<?=THEME_PATH;?>img/divider2.png" alt="" /></li>
             		<li><span class="hlavny_"><a href="#">Contact</a></span></li>
             		-->
            	</ul>
			</div>
           <!--
			<div class="info">
			
				This text is describing selected item. You may give here advertisement, informations etc. Whatever!
				
			</div>
			-->
			<div class="leftpanel">
			
				 <div class="header">Products</div>
				 
				 
						<ul id="categories">
                			<?php
                			
                			//echo makeLinks($config->nav1,'<li>','</li>'); #link arrays are created in config_inc.php file
							echo FreePortal2Menu($config->nav1,'<li>','</li>','<li class="selected">');
                			?>
							<!--
						    <li style="border-top:0;"><a href="#">Item 1</a></li>
                			<li><a href="#">Item 1</a></li>
                			<li><a href="#">Item 2</a></li>
                			<li><a href="#">Item 3</a></li>
                			<li class="selected"><a href="#">Item 4 - selected</a></li>
                			<li><a href="#">Item 5</a></li>
                			<li><a href="#">Item 6</a></li>
                			<li><a href="#">Item 7</a></li>
                			-->
						</ul>
						
						<br />
				 
				 
				 <!--<div class="header">Sidebar1</div>-->
				 
				 <div class="text">
				    <?=$config->sidebar1;?>
			 
				 </div> 
				  
			</div>
	
			<div class="mainpanel">
			<?=showFeedback();?>
			<!-- header ends here --> 
<?php

//theme specific menu function: echo FreePortal2Menu($config->nav1,'<li>','</li>','<li class="current">');
function FreePortal2Menu($linkArray,$prefix='',$suffix='',$classPrefix='',$separator="~")
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

//theme specific menu function: echo FreePortal2Menu($config->nav1,'<li>','</li>','<li class="current">','<li>','<img src="divider.jpg" >');
function FreePortal2MenuDivider($linkArray,$prefix='',$suffix='',$classPrefix='',$classSuffix='',$divider='',$separator="~")
{
	$myReturn = '';
	$counter = 0;
	foreach($linkArray as $url => $text)
	{
		$target = ' target="_blank"'; #will be removed if relative URL
		if(basename($url) == THIS_PAGE)
		{#Creates PageID - load class prefix/suffix, if not empty
			if($classPrefix !=''){$flexPrefix = $classPrefix;}else{$flexPrefix = $prefix;}
			if($classSuffix !=''){$flexSuffix = $classSuffix;}else{$flexSuffix = $suffix;}
		}else{#load default prefix/suffix
			$flexPrefix = $prefix;
			$flexSuffix = $suffix;
		}
		$httpCheck = strtolower(substr($url,0,8)); # http:// or https://
		if(!(strrpos($httpCheck,"http://")>-1) && !(strrpos($httpCheck,"https://")>-1))
		{//relative url - add path
			$url = VIRTUAL_PATH . $url;
			$target = "";
		}else if(strrpos($url,ADMIN_PATH . 'admin_')>-1){$target = "";}# clear target="_blank" for admin files
		$pos = strrpos($text, $separator); #tilde as default separator
		if ($pos === false)
		{// note: three equal signs - not found!
			$myReturn .= $flexPrefix . "<a href=\"" . $url . "\"" . $target . ">" . $text . "</a>" . $flexSuffix . "\n";
		}else{//found!  explode into title!
			$aText = explode($separator,$text); #split into an array on separator
			$myReturn .= $flexPrefix . "<a href=\"" . $url . "\" title=\"" . $aText[1] . "\"" . $target . ">" . $aText[0] . "</a>" . $flexSuffix . "\n";	
		}
		if($counter < count($linkArray) - 1){echo $divider;}
		$counter++;
	}	
	return $myReturn;	
}

?>			
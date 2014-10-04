<!DOCTYPE HTML>
<!--
	Strongly Typed 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<?php include INCLUDE_PATH . 'meta_inc.php'; ?>
		<meta name="viewport" content="width=1040" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600|Arvo:700" rel="stylesheet" type="text/css" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="<?=THEME_PATH?>js/jquery.min.js"></script>
		<script src="<?=THEME_PATH?>js/jquery.dropotron.min.js"></script>
		<script type="text/javascript">
		/*
	Strongly Typed 1.1 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

window._skel_config = {
	prefix: '<?=THEME_PATH?>css/style',
	resetCSS: true,
	boxModel: 'border',
	grid: {
		gutters: 50
	},
	breakpoints: {
		'mobile': {
			range: '-480',
			lockViewport: true,
			containers: 'fluid',
			grid: {
				collapse: true
			}
		},
		'desktop': {
			range: '481-',
			containers: 1200
		},
		'1000px': {
			range: '481-1200',
			containers: 960
		}
	}
};

window._skel_panels_config = {
	panels: {
		navPanel: {
			breakpoints: 'mobile',
			position: 'left',
			style: 'reveal',
			size: '80%',
			html: '<div data-action="navList" data-args="nav"></div>'
		}
	},
	overlays: {
		titleBar: {
			breakpoints: 'mobile',
			position: 'top-left',
			height: 44,
			width: '100%',
			html: '<span class="toggle" data-action="panelToggle" data-args="navPanel"></span>'
		}
	}
};

jQuery(function() {
	jQuery.fn.n33_formerize=function(){var _fakes=new Array(),_form = jQuery(this);_form.find('input[type=text],textarea').each(function() { var e = jQuery(this); if (e.val() == '' || e.val() == e.attr('placeholder')) { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).blur(function() { var e = jQuery(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } }).focus(function() { var e = jQuery(this); if (e.attr('name').match(/_fakeformerizefield$/)) return; if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); _form.find('input[type=password]').each(function() { var e = jQuery(this); var x = jQuery(jQuery('<div>').append(e.clone()).remove().html().replace(/type="password"/i, 'type="text"').replace(/type=password/i, 'type=text')); if (e.attr('id') != '') x.attr('id', e.attr('id') + '_fakeformerizefield'); if (e.attr('name') != '') x.attr('name', e.attr('name') + '_fakeformerizefield'); x.addClass('formerize-placeholder').val(x.attr('placeholder')).insertAfter(e); if (e.val() == '') e.hide(); else x.hide(); e.blur(function(event) { event.preventDefault(); var e = jQuery(this); var x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } }); x.focus(function(event) { event.preventDefault(); var x = jQuery(this); var e = x.parent().find('input[name=' + x.attr('name').replace('_fakeformerizefield', '') + ']'); x.hide(); e.show().focus(); }); x.keypress(function(event) { event.preventDefault(); x.val(''); }); });  _form.submit(function() { jQuery(this).find('input[type=text],input[type=password],textarea').each(function(event) { var e = jQuery(this); if (e.attr('name').match(/_fakeformerizefield$/)) e.attr('name', ''); if (e.val() == e.attr('placeholder')) { e.removeClass('formerize-placeholder'); e.val(''); } }); }).bind("reset", function(event) { event.preventDefault(); jQuery(this).find('select').val(jQuery('option:first').val()); jQuery(this).find('input,textarea').each(function() { var e = jQuery(this); var x; e.removeClass('formerize-placeholder'); switch (this.type) { case 'submit': case 'reset': break; case 'password': e.val(e.attr('defaultValue')); x = e.parent().find('input[name=' + e.attr('name') + '_fakeformerizefield]'); if (e.val() == '') { e.hide(); x.show(); } else { e.show(); x.hide(); } break; case 'checkbox': case 'radio': e.attr('checked', e.attr('defaultValue')); break; case 'text': case 'textarea': e.val(e.attr('defaultValue')); if (e.val() == '') { e.addClass('formerize-placeholder'); e.val(e.attr('placeholder')); } break; default: e.val(e.attr('defaultValue')); break; } }); window.setTimeout(function() { for (x in _fakes) _fakes[x].trigger('formerize_sync'); }, 10); }); return _form; };
	jQuery.browser={};(function(){jQuery.browser.msie=false;jQuery.browser.version=0;if(navigator.userAgent.match(/MSIE ([0-9]+)\./)){jQuery.browser.msie=true;jQuery.browser.version=RegExp.$1;}})();

	// Dropdowns
		$('#nav > ul').dropotron({ 
			offsetX: -2,
			offsetY: -8,
			mode: 'fade',
			noOpenerFade: true,
			hoverDelay: 150,
			hideDelay: 350,
			detach: false
		});

	// Forms (IE <= 9 only)
		if (jQuery.browser.msie && jQuery.browser.version <= 9)
			jQuery('form').n33_formerize();
});
		
		
		
		</script>
		<script src="<?=THEME_PATH?>js/skel.min.js"></script>
		<script src="<?=THEME_PATH?>js/skel-panels.min.js"></script>
		<noscript>
			<link rel="stylesheet" href="<?=THEME_PATH?>css/skel-noscript.css" />
			<link rel="stylesheet" href="<?=THEME_PATH?>css/style.css" />
			<link rel="stylesheet" href="<?=THEME_PATH?>css/style-desktop.css" />
		</noscript>
	</head>
	<body class="left-sidebar">

		<!-- Header Wrapper -->
			<div id="header-wrapper">
						
				<!-- Header -->
					<div id="header" class="container">
						
						<!-- Logo -->
							<h1 id="logo"><a href="#"><?=$config->banner;?></a></h1>
							<p><?=$config->slogan;?></p>
						
						<!-- Nav -->
							<nav id="nav">
								<ul>
								
								<?php 
				echo makeLinks($config->nav1,'<li>','</li>'); #link arrays are created in config_inc.php file
			?>
									<!--
									<li><a class="fa fa-home" href="index.html"><span>Introduction</span></a></li>
									<li>
										<a href="" class="fa fa-bar-chart-o"><span>Dropdown</span></a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li><a href="#">Etiam dolore nisl</a></li>
											<li>
												<a href="">Phasellus consequat</a>
												<ul>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
													<li><a href="#">Phasellus consequat</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a class="fa fa-cog" href="left-sidebar.html"><span>Left Sidebar</span></a></li>
									<li><a class="fa fa-retweet" href="right-sidebar.html"><span>Right Sidebar</span></a></li>
									<li><a class="fa fa-sitemap" href="no-sidebar.html"><span>No Sidebar</span></a></li>
								-->
									</ul>
							</nav>

					</div>

			</div>
			
		<!-- Main Wrapper -->
			<div id="main-wrapper">

				<!-- Main -->
					<div id="main" class="container">
						<div class="row">
						
							<!-- Sidebar -->
								<div id="sidebar" class="4u">
								<?=$config->sidebar1;?>
								
								<?php
								if(THIS_PAGE == 'demo_contact.php')
								{                                                                                    
									echo makeLinks($config->nav2,'<li>','</li>'); #link arrays are created in config_inc.php file</div>
                            	}
									?>  
						</div>                                                                                          
							<!-- Content -->
								<div id="content" class="8u skel-cell-important">

									<!-- Post -->
									<?=showFeedback();?>
										<article class="is-post">
										<!-- header ends here -->
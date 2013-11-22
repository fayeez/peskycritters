<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage PeskyCritters
 * @since Pesky Critters 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title>Pesky Critters</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/bootstrap/css/peskystyle.css"  type="text/css"/>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<div class="container">
		<header class="row">
			<div class="col-sm-3 bg-log-col">
				<img class="logo-width logo-pos" src="<?php echo bloginfo('template_directory') ."/images/PeskyCrittersLogo.png"; ?>" />
			</div>
			<div class="col-xs-11 col-sm-9 col-centre" id="search">
				<form class="search-bar right">
					<input type="text" class="search-query" placeholder="Search">
					<button type="submit" class="btn btn-primary">
						Go
					</button>
				</form>
				
			</div>
			<div class="col-xs-10 col-md-12 strapline-margin col-centre">
				<h2 id="strapline">Responding, Protecting, Preventing</h2>
				<p><b>Rapid Response</b></p>
			</div>
			<div class="contact-pos">
				<div class="col-xs-2 col-sm-2 contact">LOGO 07000000000</div>
				<div class="col-xs-2 col-sm-4 contact">LOGO info@pesky-critters.co.uk</div>
				<div class="col-xs-4 col-sm-2">
					<div class="col-xs-1 col-md-3 right"><img width="30px" src="<?php echo bloginfo('template_directory') ."/images/icons/facebook-icon-col.png"; ?>" /></div>
					<div class="col-xs-1 col-md-3 right"><img width="30px" src="<?php echo bloginfo('template_directory') ."/images/icons/twitter-icon-col.png"; ?>" /></div>
					<div class="col-xs-1 col-md-3 right"><img width="30px" src="<?php echo bloginfo('template_directory') ."/images/icons/youtube-icon-col.png"; ?>" /></div>
				</div>
			</div>
	
			
		</header>
		<div class="row">
			<nav class="navbar navbar-background">
				<div class="navbar-inner">
					<div class="container">
						<?php
							if(function_exists('wp_nav_menu')):
								wp_nav_menu(
								array(
									
									'menu' =>'Pesky Menu',
									'container' =>'',
									'depth' => 4,
									'menu_class' => 'nav navbar-nav',
									'menu_id' =>'menu' )
									);
							else:
							?>
									<ul id="menu">
										<?php wp_list_pages('title_li=&depth=1'); ?>
									</ul>
								<?php
								endif;
						?>
					</div>
				</div>
			</nav>
			
			
			
		</div>
		<div class="site-ain">

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
			<div class="col-xs-3 full-banner-size">
				<img class="logo-width logo-pos" src="<?php echo bloginfo('template_directory') ."/images/PeskyCrittersLogo.png"; ?>" />
			</div><!-- header -->
			<div class="col-xs-9 full-banner-size header-width">
				<div class="row" id="search">
					Search
				</div>
				<div class="row">
					<h2 class="col-xs-9" id="strapline">Responding, Protecting, Preventing</h2>
				</div>
				
				<div class="row contact-banner-pos">
					<div class="col-md-3">Rapid Response</div>
					<div class="col-md-3">Tel No.</div>
					<div class="col-md-3">Email</div>
					<div class="col-md-3">
						<div class="col-xs-4">
							Fb
						</div>
						<div class="col-xs-4">
							Twitter
						</div>
						<div class="col-xs-4">
							YT
						</div>
					</div>
				</div>
				
				
			</div><!-- header -->
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

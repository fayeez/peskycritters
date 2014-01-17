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
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>style.css"  type="text/css"/>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php
	include("jquery.php");
	wp_head();
	?>
</head>
<body>
	<div class="container">
		<header class="row no-margins header">
			<div class="col-xs-4 col-sm-3 pull-left">
				<a href="#"><img class="logo-width logo-left" src="<?php echo bloginfo('template_directory'); ?>/images/PeskyCrittersLogo.jpg" /></a>
			</div>
			<div class="col-xs-8 col-sm-9 pull-right" id="search">
				<form method="get" class="search-bar pull-right" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input type="text" class="search-query" name="s" placeholder="<?php esc_attr_e( 'Search', 'peskycritters' ); ?>">
					<button type="submit" class="btn btn-primary"><i class="icon_search"></i>Go</button>
				</form>
			</div>
			<div class="col-xs-8 col-sm-9">
				<h2 class="site-desription" id="strapline"><?php bloginfo( 'description' ); ?></h2>
			</div>
			<div class="col-sm-9 contact-info">
				<div class="col-xs-7 col-sm-3 col-md-3 no-margins">
					<img class="header-icon-size" src="<?php echo bloginfo('template_directory') ."/images/icons/email-icon-col.png"; ?>" /> 01753 123456
				</div>
				<div class="col-xs-7 col-sm-5 col-md-4">
					<div class="no-margins" id="contac-mobile-number">
						<img class="header-icon-size" src="<?php echo bloginfo('template_directory') ."/images/icons/phone-icon-col.png"; ?>" /> <strong>Rapid Response</strong> 07000000000
					</div>
				</div>
				<div class="col-xs-7 col-sm-4 col-md-3">
					<div class="no-margins" id="contact-email">
						<img class="header-icon-size" src="<?php echo bloginfo('template_directory') ."/images/icons/email-icon-col.png"; ?>" /> info@pesky-critters.co.uk
					</div>
				</div>
				<div class="col-sm-4 col-md-2 social-contact pull-right no-margins">
					<div class="pull-right no-margins">
						<a href="#"><img class="header-social-icon" src="<?php echo bloginfo('template_directory') ."/images/icons/facebook-icon-col.png"; ?>" /></a>
						<a href="#"><img class="header-social-icon" src="<?php echo bloginfo('template_directory') ."/images/icons/twitter-icon-col.png"; ?>" /></a>
						<a href="#"><img class="header-social-icon" src="<?php echo bloginfo('template_directory') ."/images/icons/youtube-icon-col.png"; ?>" /></a>
					</div>
				</div>
			</div>
		</header>
		<div class="row no-margins">
			<nav class="navbar navbar-background">
				<div class="navbar-inner">
					<div class="container">
						<?php
							if(function_exists('wp_nav_menu')):

								wp_nav_menu(
									array(	
										'menu' => 'PeskyMenu',
										'theme_location' => 'primary',
										'container' =>'',
										'depth' => 2,
										'menu_class' => 'nav navbar-nav',
										'menu_id' =>'menu',
										'walker' => new wp_bootstrap_navwalker())
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

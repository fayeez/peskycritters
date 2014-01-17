<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage PeskyCritters
 * @since Pesky Critters 1.0
 */
?>

		</div><!-- #main -->
		
		<footer class="row footer" id="" role="contentinfo">
			<div class="col-md-12">
				<div class="col-md-12">
					<div class="">
						<?php
							if(function_exists('wp_nav_menu')):

								wp_nav_menu(
									array(	
										'menu' => 'PeskyMenu',
										'theme_location' => 'primary',
										'container' =>'',
										'depth' => 1,
										'menu_class' => 'footer-sitemap col-xs-12 col-md-3',
										'walker' => new wp_bootstrap_navwalker(),
										'after' => '<hr/>'
										)
									
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
					<!--Accolades-->
					<div class="col-xs-12 col-sm-6 col-md-5 col-sm-offset-3 col-md-offset-1">
						<div class="col-xs-12 col-sm-12 col-md-12 centre-images">
							<div class="accolades col-sm-12 col-md-12">Using cutting edge technology and innovative products from:</div>
							<a href="#"><img class="footer-logo-size" src="<?php echo bloginfo('template_directory') ."/images/bell-laboratories-logo.jpg"; ?>" /></a>
							<a href="#"><img class="footer-logo-size" src="<?php echo bloginfo('template_directory') ."/images/think-wildlife-logo.jpg"; ?>" /></a>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 centre-images">
							<a href="#"><img class="footer-logo-size xs-margin-top" src="<?php echo bloginfo('template_directory') ."/images/killgerm-logo.jpg"; ?>" /></a>
							<a href="#"><img class="footer-logo-size xs-margin-top" src="<?php echo bloginfo('template_directory') ."/images/pcp-logo.jpg"; ?>" /></a>
						</div>
					</div>
					<div class="col-xs-6 col-sm-4 col-md-3 col-xs-offset-3 col-sm-offset-4 col-md-offset-0">
						<div class="">
							<a href="#"><img class="footer-icon-size pull-right" src="<?php echo bloginfo('template_directory') ."/images/icons/youtube-icon-col.png"; ?>" /></a>
							<a href="#"><img class="footer-icon-size pull-right" src="<?php echo bloginfo('template_directory') ."/images/icons/twitter-icon-col.png"; ?>" /></a>
							<a href="#"><img class="footer-icon-size pull-right" src="<?php echo bloginfo('template_directory') ."/images/icons/facebook-icon-col.png"; ?>" /></a>
						</div>
					</div>
				</div>
				<div class="col-xs-10 col-xs-offset-1 site-info" id="designed-by">
					
					<a href="http://www.kairos-vision.com"><p class="text-center">Designed by Kairos Vision <img class="kairos-vision-logo" src="<?php echo bloginfo('template_directory') ."/images/KairosLogoFull-xsmall.jpg"; ?>" /></p></a>
					<div class="col-md-12 text-center" id="pesky-critters-footer">
						Pesky Critters <?php echo date("Y"); ?>
					</div>
				</div><!-- .site-info -->
			</div>
			
		</footer><!-- #colophon -->
		
			
	</div><!-- #container -->

	<?php //wp_footer(); ?>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
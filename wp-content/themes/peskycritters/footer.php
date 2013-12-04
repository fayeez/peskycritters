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
				<div class="col-md-12 text-center" id="pesky-critters-footer">
					Pesky Critters 2013
				</div>
				<div class="col-md-4 col-md-offset-4 site-info" id="designed-by">
					<a href="http://www.kairos-vision.com"><p class="text-center">Designed by Kairos Vision</p></a>
				</div><!-- .site-info -->
				<div class="col-md-12">
					<div class="col-md-4">
						<ul class="col-md-6 col-sm-3 col-sm-offset-0 col-xs-5 col-xs-offset-2 footer-sitemap">
							<li>About</li>
							<li>Domestic Services</li>
							<li>Commercial Services</li>
							<li>Testimonials</li>
						</ul>
						<ul class="col-md-6 col-sm-3 bg-col col-xs-5 footer-sitemap">
							<li>Pest Information</li>
							<li>Environmentally Friendly</li>
							<li>Contact Us</li>
						</ul>
					</div>
					<!--Accolades-->
					<div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-2 col-xs-6 col-xs-offset-2 sm-margin-bottom">
						<a href="#"><img class="footer-logo-size" src="<?php echo bloginfo('template_directory') ."/images/bell-laboratories-logo.jpg"; ?>" /></a>
						<a href="#"><img class="footer-logo-size" src="<?php echo bloginfo('template_directory') ."/images/think-wildlife-logo.jpg"; ?>" /></a>
						<a href="#"><img class="footer-logo-size xs-margin-top" src="<?php echo bloginfo('template_directory') ."/images/killgerm-logo.jpg"; ?>" /></a>
						<a href="#"><img class="footer-logo-size xs-margin-top" src="<?php echo bloginfo('template_directory') ."/images/pcp-logo.jpg"; ?>" /></a>
					</div>
					<div class="col-md-4 col-md-offset-0 col-sm-3 col-sm-offset-5 col-xs-4">
						<div class="">
							<a href="#"><img class="col-md-offset-3 footer-icon-size left" src="<?php echo bloginfo('template_directory') ."/images/icons/facebook-icon-col.png"; ?>" /></a>
							<a href="#"><img class="footer-icon-size left" src="<?php echo bloginfo('template_directory') ."/images/icons/twitter-icon-col.png"; ?>" /></a>
							<a href="#"><img class="footer-icon-size left" src="<?php echo bloginfo('template_directory') ."/images/icons/youtube-icon-col.png"; ?>" /></a>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #container -->

	<?php //wp_footer(); ?>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
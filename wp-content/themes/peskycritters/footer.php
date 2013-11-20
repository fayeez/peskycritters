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
			<div class="col-md-12 col-centre">
				<div class="col-md-3">
					<p>site map will go here</p>
					<ul>
						<l>Site Map here,</l>
						<l>Site Map here,</l>
						<l>Site Map here,</l>
						<l>Site Map here,</l>
						<l>Site Map here</l>
					</ul>
				</div>
				<div class="col-md-6">Important Accolades will go here</div>
				<div class="col-md-3">Social sites will go here</div>
			</div>
			
			<!--TWENTY_THIRTEEN FOOTER-->
			<?php //get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				
				<a href="http://www.kairos-vision.com">Powered by Kairos Vision</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #container -->

	<?php //wp_footer(); ?>
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
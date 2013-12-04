<?php
/**
 * The main file to display the home page if there is no home.php
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage PeskyCritters
 * @since Pesky Critters 1.0
 */

get_header(); ?>
	<div>
		<div class="row">
			<div class="col-md-12 col-centre">
				<div class="col-md-12">
					<div class="col-md-8 slider">
						<img class="slider-img" id="1" src="http://www.gifmix.net/smileys/sports-smilies/5.gif" alt="<h2>My Header</h2>Some text!"/>
						<img class="slider-img" id="2" src="http://www.gifmix.net/smileys/sports-smilies/6.gif" alt="<h2>My Second Header</h2>Second some text!"/>
						<div class="caption"><div class="content"></div></div>
						<div class="col-xs-12">
							<div class="slider_nav previous col-xs-1">
								<img name="prev" src="<?php bloginfo('template_directory'); ?>/images/previous.png"/>
							</div>
							<div class="col-xs-10"></div>
							<div class="slider_nav next col-xs-1">
								<img name="next" src="<?php bloginfo('template_directory'); ?>/images/next.png"/>
							</div>
						</div>
					</div>	
					<div class="col-md-4 bg-col3">
						<div class="col-md-12 bg-col2">
							video
						</div>
						<div class="col-md-12 bg-col2">
							Newsfeed
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-4 bg-col5">
						Text/Info Box
					</div>
					<div class="col-md-4 bg-col4">
						Text/Info Box
					</div>
					<div class="col-md-4 bg-col5">
						Text/Info Box
					</div>
					<div class="col-md-4 bg-col4">
						Text/Info Box
					</div>
					<div class="col-md-4 bg-col5">
						Text/Info Box
					</div>
					<div class="col-md-4 bg-col4">
						Text/Info Box
					</div>
				</div>
				
				
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

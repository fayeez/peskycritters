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
						<?php
						
						
						$images = array();
						$image_text = array();
						$slider_img_dir = dirname(__FILE__) . '/images/slider-images/';
						
						if ($handle = opendir($slider_img_dir)){
							while (false !== $entry = readdir($handle)){
								if ($entry != "." && $entry != ".." && $entry != ".DS_Store") {
									if (strpos($entry, 'jpg')){
										$images[] = $entry;
									}
									elseif (strpos($entry, 'txt')){
										$image_text[] = $entry;
									}
								}
							}
							//Numerically sort the lists
							sort($images);
							sort($image_text);
							
							//Limit number of images the header is allowed
							$images = array_slice($images, 0, 5);
							
							for($i = 0; $i < sizeof($images); $i++){
								//Parse the text file to read in the data to display
								$file = file($slider_img_dir.$image_text[$i]);
								
								
								$contents = explode(":", $file[0]);
								$header = $contents[0];
								$description = $contents[1];
								//echo $header . " " .  $description . "<br/>";
								?>
								<img class="slider-img" id="<?php echo $i +1 ?>" src="<?php echo bloginfo('template_directory').'/images/slider-images/'.$images[$i]; ?>" alt="<h2><?php echo $header ?></h2><p><?php echo $description ?></p>"/>
								<?php
							}
						}
						?>
						<div class="caption col-md-12"><div class="content"></div></div>
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
					<div class="col-md-4 col-xs-offset-1 col-sm-offset-0">
						<div class="col-md-12 col-md-offset-1 col-sm-6 col-xs-">
							!VIDEO!
						</div>
						<div class="col-md-12 col-md-offset-1 col-sm-6 col-xs-6 news-announcement">
							<h4>News</h4>
							<hr/>
							<div class="news-announcement-text">
								<?php
								if (function_exists ("news_announcement")){
									news_announcement();
								}	
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 col-xs-11">
				<?php
				query_posts('p=1');
				if ( have_posts() ) :
					 /* The loop */
					while ( have_posts() ) :
						the_post();
						if ( strstr(get_the_title(), "Front Page Info Boxes" ) !== false )
						{
							
							$infoboxes = explode('/end/', get_the_excerpt());
							foreach ($infoboxes as $infobox)
							{
								if ($infobox !== "")
								{
							?>	
									<div class="col-md-4 col-sm-4 col-xs-6 col-xs-offset-1 col-sm-offset-0">
										<div class="col-md12 infobox">
											<?php echo $infobox; ?>
										</div>
									</div>
							<?php
								}
							}
						}
					endwhile;
					?>
		
				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
				</div>
				<div class="call-to-action-btn">
					<a href="#" ><h3>Get a Quote!</h3></a>
				</div>
				
				
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>

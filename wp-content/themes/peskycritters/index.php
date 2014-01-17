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
		<div class="row no-margins">
			
				<div class="col-md-7 slider bg-col2">
					<?php
					// The directory that this function searches for images is in ...themes/peskycritters/images/
					// Just specify the folder name within this directory
					$image_meta = get_img_from_dir("slider-images");
					
					//Numerically sort the lists
					$images = $image_meta[0];
					$image_text = $image_meta[1];
					sort($images);
					sort($image_text);
					$slider_img_dir = get_bloginfo('template_directory').'/images/slider-images/';
					
					
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
						<img class="slider-img" id="<?php echo $i +1 ?>" src="<?php echo $slider_img_dir.$images[$i]; ?>" alt="<h2><?php echo $header ?></h2><p><?php echo $description ?></p>"/>
						<?php
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
				<div class="col-md-5 col-xs-8 col-xs-offset-2 col-md-offset-0 front-page-sidebar">
					<div class="col-sm-12 front-page-parent-video">
						<video class="front-page-video" controls>
							<source src="<?php bloginfo('template_directory'); ?>/videos/PeskyCrittersPromoVid/PeskyCrittersPromoVid-Med.m4v" type="video/mp4">
							<source src="<?php bloginfo('template_directory'); ?>/videos/PeskyCrittersPromoVid/PeskyCrittersPromoVid-Med.ogg" type="video/ogg">
						</video>
					</div>
					<div class="col-sm-12 parent-news-announcement">
						<div class="news-announcement">
							<h4>Latest News</h4>
							<div class="news-announcement-text">
								<?php
								if (function_exists ("horizontal_scrolling_announcement")){
									horizontal_scrolling_announcement();
								}	
								?>
							</div>
						</div>
					</div>
					
				</div>
			
		
		</div>
		<div class="row">
			<?php
			query_posts('p=1');
			if ( have_posts() ) :
				 /* The loop */
				while ( have_posts() ) :
					the_post();
					if ( strstr(get_the_title(), "Information Boxes" ) !== false )
					{
						
						$infoboxes = explode('/end/', get_the_content());
						foreach ($infoboxes as $infobox)
						{
							if ($infobox !== "")
							{
						?>	
								<div class="col-xs-offset-2 col-sm-offset-0 infoboxes-nopadding">
									
									<div class="col-sm-3 col-xs-10 infobox">
										<div class="">
											<?php
											if (strstr($infobox, "http://")){
												$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
												if(preg_match($reg_exUrl, $infobox, $url)) {
													// make the urls hyper links
													//echo preg_replace($reg_exUrl, "<a href='$url[0]'>Click here for more info</a>", $infobox);
												}
											}
											else {
												echo $infobox;
											}
											echo $infobox;
											?>
										</div>
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
		<?php include "call-to-action.php" ?>
		</div><!-- #content -->
		<?php get_footer(); ?>
	</div><!-- #primary -->
	

<?php
/*
Template Name: Pest Information page
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header col-md-12">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<h1 class="page-title"><?php the_title(); ?></h1>
						<hr/>
					</header><!-- .entry-header -->

					<div class="entry-content col-sm-12">
						<?php
						
						$pattern = '(<[/]?a.*>)';
						$contentMatch = array();
						$testimonial = preg_match_all($pattern, get_the_content(), $contentMatch);
						$content = preg_replace($pattern, '', get_the_content());
						
						$image_meta = get_img_from_dir("pests/insects");
						
						$insect_dir = 'images/pests/insects/';
						for ($i=0; $i<sizeof($contentMatch[0]); $i++)
						{
							
							for ($j=0; $j<sizeof($image_meta[0]); $j++)
							{
								if (strip_tags($contentMatch[0][$i]).".jpg" == $image_meta[0][$j]) {
									echo $image_meta[0][$j];
									?>
									<style type="text/css">
									.pest-category {
										/*background-image: url('<?php echo bloginfo("template_directory").'/images/pests/insects/'.$image_meta[0][$j] ?>');*/
										background-repeat: no-repeat;
									}
									</style>
									<div class="pest-category col-sm-3 col-xs-6">
										<div class="red-pest-category">
											<div class="col-sm-12 pest-category-text">
												<?php echo $contentMatch[0][$i];?>
											</div>
											<img class="pest-category-image" src="<?php echo bloginfo("template_directory").'/images/pests/insects/'.$image_meta[0][$j] ?>" />
										</div>
									</div>
									<?php
									
									
								}
								else {
									
								}
							}
							if ($contentMatch[0][$i] == $image_meta[0][$i])
							{
								echo $contentMatch[0][$i];
								
								
							}	
						}?>

						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->
					
				</article><!-- #post -->
			<?php endwhile; ?>
			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
			
			<?php include "call-to-action.php" ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
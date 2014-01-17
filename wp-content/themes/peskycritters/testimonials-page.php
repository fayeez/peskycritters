<?php
/*
Template Name: Testimonials Page
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

					<div class="">
						<?php
						$pattern = '(<[/]?blockquote.*>)';
						$contentMatch = array();
						$testimonial = preg_match_all($pattern, get_the_content(), $contentMatch);
						$content = preg_replace($pattern, '', get_the_content());

						for ($i=0; $i<sizeof($contentMatch[0]); $i++)
						{
							if ($i%2 == 0) {
								?><div class="entry-content cst-blockquote col-sm-6 pull-left"><?php echo $contentMatch[0][$i];?></div><?php
								
							}
							else {
								?><div class="entry-content cst-blockquote col-sm-6 pull-right"><?php echo $contentMatch[0][$i];?></div><?php
							}
						}
						//the_content(); ?>
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
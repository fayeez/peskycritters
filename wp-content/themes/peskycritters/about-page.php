<?php
/*
Template Name: About Page
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

					<div class="entry-content col-md-8">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->
					
					<?php
					$args = array(	'post_type' => 'attachment',
								'posts_per_page' => -1,
								'post_status' =>'null',
								'post_parent' => $post->ID ); 
					$attachments = get_posts( $args );
					if ( $attachments ) {
						foreach ( $attachments as $attachment ) {
							?>
							<div class="col-md-4 col-sm-6">
								<div class="col-md-12 portrait-box">
									<img class="portraits" src="<?php echo wp_get_attachment_url($attachment->ID) ?>" />
								</div>
							</div> <?php
						}
					}
					else { ?>
						<div class="col-md-4 bg-col3">
							something else
						</div>
					<?php } ?>
					
				</article><!-- #post -->
			<?php endwhile; ?>
			<footer class="entry-meta">
				<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-meta -->
			
			<div class="call-to-action-btn">
				<a href="#" ><h3>Get a Quote!</h3></a>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
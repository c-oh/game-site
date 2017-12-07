<?php
/**
 * The template for displaying archive project type pages.
 *
 * @package Game_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
			</header>
			<!-- .page-header -->
			<div class="boxes" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="project-post">
					<div class="project-thumbnail">
						<a href="<?php the_permalink() ; ?> ">
							<?php the_post_thumbnail( 'large' ); ?>
						</a>
					</div>
				</div>
				<!-- project-post -->
				<?php endwhile ?>
			</div>
	</div>
	<!-- #post-## -->
	</div>
	<?php else : ?>
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
	</main>
	<!-- #main -->
	</div>
	<!-- #primary -->
	<?php get_footer(); ?>

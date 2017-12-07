<?php
/**
 * The template for displaying all single project posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>
	<section id="primary" class="content-area-sp">
		<main id="main" class="site-mainsproduct" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<section class="sp-text-container">
				<div class="sp-thumbnail">
					<?php the_post_thumbnail( 'category-thumb'); ?>
				</div>
				<div class="sp-info">
					<h1 class="project-page-title">Project</h1>
					<h2 class="single-product-title">
						<?php the_title();?>
					</h2>
					<h3 class="project-overview sp-title">Overview:</h3>
					<p>
						<?php echo CFS()->get( 'overview' ); ?>
					</p>

					<h3 class="project-client sp-title">Client:</h3>
					<p>
						<?php echo CFS()->get( 'client' ); ?>
					</p>
					<h3 class="project-role sp-title">Role:</h3>
					<p>
						<?php echo CFS()->get( 'role' ); ?>
					</p>
					<h3 class="project-deliverables sp-title">Deliverables:</h3>
					<p>
						<?php echo CFS()->get( 'deliverables' ); ?>
					</p>
					<h3 class="project-tools sp-title">Tools:</h3>
					<p>
						<?php echo CFS()->get( 'tools' ); ?>
					</p>
				</div>
			</section>
			<div class="sp-carousel">
				<?php $image_gallery = CFS()->get('image_gallery');
  					foreach ($image_gallery as $image) {
    				echo '<img src="'.$image["image"].'"/>';
  				} ?>
			</div>
			<?php
			?>
			<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</section>
	<!-- #primary -->
	<?php get_footer(); ?>
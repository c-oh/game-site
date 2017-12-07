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
			<section class="sp-container">
				<div class="sp-thumbnail">
					<?php the_post_thumbnail( 'category-thumb'); ?>
				</div>
				<div class="sp-info">Project</h1>
					<h1 class="project-type">
						<h2 class="single-product-title">
							<?php the_title();?>
						</h2>
						<h3 class="project-overview">Overview:</h3>
						<p>
							<?php echo CFS()->get( 'project_overview' ); ?>
						</p>
						<h3 class="project-client">Client:</h3>
						<p>
							<?php echo CFS()->get( 'project_client' ); ?>
						</p>
						<h3 class="project-role">Role:</h3>
						<p>
							<?php echo CFS()->get( 'project_role' ); ?>
						</p>
						<h3 class="project-deliverables">Deliverables:</h3>
						<p>
							<?php echo CFS()->get( 'project_deliverables' ); ?>
						</p>
						<h3 class="project-tools">Tools:</h3>
						<p>
							<?php echo CFS()->get( 'project_tools' ); ?>
						</p>
				</div>
			</section>
			<?php
			?>
			<?php endwhile; // End of the loop. ?>
		</main>
		<!-- #main -->
	</section>
	<!-- #primary -->
	<?php get_footer(); ?>
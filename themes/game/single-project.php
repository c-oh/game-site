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

			<div class="sp-thumbnail">
				<?php $banner_image = CFS()->get('banner_image');
					  foreach ($banner_image as $banner) {
    				echo '<img src="'.$banner["banner"].'"/>';
				  } ?>
			</div>
			<div id="project-down-arrow">
				<img src="<?php echo get_template_directory_uri();?>/resources/images/down-arrow.png" alt="a downwards arrow">
			</div>
			<section id="sp-text-container">
				<div class="sp-info">
					<h1 class="project-page-title">Project</h1>
					<h2 class="single-project-title">
						<?php the_title();?>
					</h2>
					<div class="sp-container-2">
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
					</div>
					<div class="sp-container-2">
						<h3 class="project-deliverables sp-title">Deliverables:</h3>
						<p>
							<?php echo CFS()->get( 'deliverables' ); ?>
						</p>
						<h3 class="project-tools sp-title">Tools:</h3>
						<p>
							<?php echo CFS()->get( 'tools' ); ?>
						</p>
					</div>
				</div>
			</section>
			<div class="sp-carousel">
				<?php $image_gallery = CFS()->get('image_gallery');
				$background_colour = CFS()->get('background_colour');
					  foreach ($image_gallery as $image) {
    				echo '<a target="_blank" href="'.$image["image"].'"><div class="sp-image-container" style="background-color: '.$image["colour"].'"><img src="'.$image["image"].'"/></div></a>';
				  } ?>

			</div>
			<?php endwhile; // End of the loop. ?>
			<div class="sp-links">
				<?php 
				$link = CFS() -> get('link');
				if ( !empty( $link) ) { 
					?>
					<p><?php CFS()->get('project_cta');?></p>
					<?php echo $link ?>
				<?php } ?>
			</div>
		</main>
		<!-- #main -->

		<!-- #project loop -->
	</section>

	<!-- #primary -->
	<?php get_footer(); ?>
<?php
/* Template Name: Archive Page Custom */
?>

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
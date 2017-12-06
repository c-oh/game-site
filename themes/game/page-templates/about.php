<?php
 /* Template Name: About Page
 *
 * @package Game_Theme
 */
 get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="about-photo">
                <?php  $about_images = CFS()->get('about_images');
                foreach ($about_images as $image) {
                 echo '<img src="'.$image["image"].'" alt= "About Image"/>';
                } ?>
            </div>
            <div id="down-arrow">
            <img src="<?php echo get_template_directory_uri();?>/resources/images/down-arrow.png" alt="a downwards arrow">
            </div>
            <div id="about-copy">
                <?php echo CFS()->get( 'your_description' ); ?>
            </div>
            <div class="about-bottom">
                <img class="about-thankyou" src="<?php echo get_template_directory_uri();?>/resources/images/thank-you.png" alt="Thank you">
                <div class="about-social-container">
                    <a href="#" class="about-social-links">
                        <i class="fa fa-facebook-square" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="about-social-links">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="about-social-links">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="contact-prompt">
                    <h3>I am currently looking for new opportunities!</h3>
                    <a class= "contact-button" href="mailto:someone@example.com?Subject=Hello">Send me an email</a>
                </div>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
    <?php get_footer(); ?>
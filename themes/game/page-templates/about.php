<?php
 /* Template Name: About Page
 *
 * @package Game_Theme
 */
 get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <h4 class="about-title">About Me</h4>
            <div class="about-top-container">
                <div class="about-photo">
                    <?php  $about_images = CFS()->get('about_images');
                foreach ($about_images as $image) {
                 echo '<img src="'.$image["image"].'" alt= "About Image"/>';
                } ?>
                </div>
                <div id="down-arrow">
                    <img src="<?php echo get_template_directory_uri();?>/resources/images/down-arrow.png" alt="a downwards arrow">
                </div>
                <div class="about-text-container">
                    <div id="about-copy">
                        <?php echo CFS()->get( 'your_description' ); ?>
                        <p>If you would like to see more about my career, please check my <a class="resume-link" href="<?php echo CFS()->get( 'resume' ); ?>">resume here</a></p>
                    </div>

                    <div class="about-bottom">
                        <img class="about-thankyou" src="<?php echo get_template_directory_uri();?>/resources/images/thank-you.png" alt="Thank you">
                        <div class="about-social-container">
                            <a href="https://medium.com/@jessicacho2013" class="about-social-links">
                                <img class="social-logo" src="<?php echo get_template_directory_uri();?>/resources/images/medium.png" alt="medium">
                            </a>
                            <a href="https://www.linkedin.com/in/jungmin-jessica-cho-587975135/" class="about-social-links">
                                <img class="social-logo" src="<?php echo get_template_directory_uri();?>/resources/images/linkedin.png" alt="linkedin">
                            </a>
                            <a href="https://www.facebook.com/panda.cho.58" class="about-social-links">
                                <img class="social-logo" src="<?php echo get_template_directory_uri();?>/resources/images/facebook.png" alt="facebook">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-prompt">
                <h3>I am currently looking for new opportunities!</h3>
                <a class="contact-button" href="mailto:jessicacho2013@gmail.com?Subject=Hello">Send me an email</a>
            </div>
        </main>
        <!-- #main -->
    </div>
    <!-- #primary -->
    <?php get_footer(); ?>
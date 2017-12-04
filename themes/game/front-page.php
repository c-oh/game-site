<?php
/**
* The main template file.
*
*@package Game_Theme
*/
get_header(); ?>

<section class= "home-container">
    <div class="image-title">
        <img src="<?php echo get_template_directory_uri();?>/resources/images/video-title.png" alt="logo of site">
        <h2>User Interface & Graphic Designer</h2>
    </div>
    <div class= "copyright-container">
        <img src="<?php echo get_template_directory_uri();?>/resources/images/copyright.png" alt="copyright logo">
        <h6>Jungmin Cho</h6>
        </div>
    <div class="start-instructions">
        <h6>Press start</h6>
    </div>
    <div class="home-buttons">
        <div> <img src="<?php echo get_template_directory_uri();?>/resources/images/bird.png" alt="image of bird"><a href= "#">Projects</a> </div>
        <div> <img src="<?php echo get_template_directory_uri();?>/resources/images/bird.png" alt="image of bird"><a href= "#">About</a> </div>
    </div>

</section>
    <?php get_footer(); ?>
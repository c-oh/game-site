<?php
/**
* The main template file.
*
*@package Game_Theme
*/
get_header(); ?>

<section class= "home-game-container ">
    <div class="image-title">
        <img class= "banner" src="<?php echo get_template_directory_uri();?>/resources/images/video-title.png" alt="logo of site">
        <h2>User Interface & Graphic Designer</h2>
    </div>
    <div class= "copyright-container">
        <img src="<?php echo get_template_directory_uri();?>/resources/images/copyright.png" alt="copyright logo">
        <h6>Jungmin Cho</h6>
        </div>
    <div class="start-instructions">
        <a href="/jessica/game">Press start</a>
    </div>
   <!-- <div class="start-instructions desktop-buttons">
        <a href="projects">Projects</a>
    </div>
    <div class="start-instructions desktop-buttons">
        <a href="about-me">About</a>
    </div>-->

</section>
    <?php get_footer(); ?>
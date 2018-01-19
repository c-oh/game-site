<?php
/* Template Name: Game Page
 *
 * @package Game_Theme
 */
get_header(); ?>

    <section class="home-game-container">
        <div class="image-title">
            <img class= "banner" src="<?php echo get_template_directory_uri();?>/resources/images/video-title.png" alt="logo of site">
            <h2>User Interface & Graphic Designer</h2>
        </div>
        <div class="copyright-container">
            <img class="bird" src="<?php echo get_template_directory_uri();?>/resources/images/copyright.png" alt="copyright logo">
            <h6>Jungmin Cho</h6>
        </div>
        <div class="game-page-start-text">
            <a href="/game">Press start</a>
        </div>
        <div class="game-page-instructions game-projects">
            <img class="bird" src="<?php echo get_template_directory_uri();?>/resources/images/bird.png" alt="select button">
            <a href="/projects">Projects</a>
        </div>
        <div class="game-page-instructions game-about">
            <img class="bird" src="<?php echo get_template_directory_uri();?>/resources/images/bird.png" alt="select button">
            <a href="/about">About</a>
        </div>

    </section>
    <?php get_footer(); ?>
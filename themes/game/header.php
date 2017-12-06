<?php
/**
 * The header for our theme.
 *
 * @package Game_Theme
 */

?>
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html( 'Skip to content' ); ?>
			</a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php bloginfo( 'name' ); ?>
						</a>
					</h1>
					<p class="site-description">
						<?php bloginfo( 'description' ); ?>
					</p>
				</div>
				<!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="mobile-menu-container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo get_template_directory_uri();?>/resources/images/smalllogo.png" alt="logo of site"></a>
						<div id= "hamburger">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</div>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-menu' ) ); ?>
					<div class="row-menu">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'desktop-menu' ) ); ?>
					</div>
				</nav>
				<!-- #site-navigation -->
			</header>
			<!-- #masthead -->

			<div id="content" class="site-content">
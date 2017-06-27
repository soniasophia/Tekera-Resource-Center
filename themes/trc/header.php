<?php
/**
 * The header for our theme.
 * nATE RULES
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
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
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">

		<div class = site-header-wrapper>

			<div class = "mobile-nav">
				<div class = "menu-btn" id ="menu-btn">
						<button class="hamburger"> &#9776;</button>
				</div> 

					<div class="hamburger-menu">
						<ul>
							<!--<li> <a href="#"> Who we are </a> </li>
							<li><a href="#"> What we do </a></li>
							<li><a href="#"> How we do it </a> </li>
							<li><a href="#"> Get Involved </a></li>
							<li><a href="#"> Blog </a></li>
							<li><a href="#"> Contact </a> </li>-->
							<?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						</ul>
					</div> 
				</div>
					

					<div class = "tekera-site-logo">
						<a href="<?php echo site_url();?>">
						
						<img src="<?php echo get_template_directory_uri();?>/assets/Logos/tekera_logo_desktop_pie.png">
					</div>
					
					<div class = "tekera-site-text">
						<a href="<?php echo site_url();?>">

						<img src="<?php echo get_template_directory_uri();?>/assets/Logos/tekera_logo_desktop_text.png">
					</div>

					<nav id="site-navigation" class="main-navigation" role="navigation">
						<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>-->
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->

					<div class = "tekera-triangles">
						<img src="<?php echo get_template_directory_uri();?>/assets/Logos/tekera_triangles.png">
					</div>

				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">

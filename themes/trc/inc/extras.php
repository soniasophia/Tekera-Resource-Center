<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


// Filter Archive Titles
function trc_archive_title_filter($title)
{
    if (is_post_type_archive('projects')) {
        $title = 'Projects';

    } elseif (is_tax('project-type')) {
        $title = single_term_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'trc_archive_title_filter' );

// Custom login logo
function trc_custom_login_logo() {
	echo '<style type="text/css">
		#login h1 a { 
			background-image: url('. get_stylesheet_directory_uri() . '/assets/Logos/tekera_logo_desktop_pie_large.png) !important; 
			height: 120px !important; 
			background-position: center !important; 
			background-size: contain !important; 
			width: 100% !important; 
		}
		</style>';
}
add_action( 'login_head', 'trc_custom_login_logo' );

// Custom login logo url
function trc_custom_login_logo_url( $url ) {
    return home_url();
}
add_filter( 'login_headerurl', 'trc_custom_login_logo_url' );

// Custom login logo url title
function trc_login_logo_url_title() {
    return 'Tekera Resource Center';
}
add_filter( 'login_headertitle', 'trc_login_logo_url_title' );
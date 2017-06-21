<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );
	wp_enqueue_style( 'flickity-cdn-css', 'https://unpkg.com/flickity@2/dist/flickity.min.css' );

	wp_enqueue_script( 'flickity-cdn', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', array('jquery'), false );
	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'more-blog-posts', get_template_directory_uri() . '/build/js/more-blog-posts.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'sub-menu-toggle', get_template_directory_uri() . '/build/js/sub-menu-toggle.min.js', array('jquery'), null, true );

  wp_enqueue_script( 'blog-hover-behaviour', get_template_directory_uri() . '/build/js/blog-hover-behaviour.min.js', array('jquery'), null, true );

	  wp_enqueue_script( 'hamburger-menu', get_template_directory_uri() . '/build/js/hamburger-menu.min.js', array('jquery'), null, true );
  wp_enqueue_script( 'members-popup', get_template_directory_uri() . '/js/members-popup.js', array('jquery'), null, true );

  wp_localize_script( 'members-popup', 'WORD_API', array(
	'api_url' => esc_url_raw( rest_url() )
));

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


function short_excerpt($string) {
echo substr($string, 0, 100); 
}

/**
* Limit number of tags per post that are displayed on single blog page navigation.
*/
// function limit_to_one_tag($terms) {
// 	return array_slice($terms,0,1,true);
// }
// add_filter('term_links-post_tag','limit_to_one_tag');

// Custom Sub Menus
function register_tekera_what_we_do_custom_menu() {
	register_nav_menu('what-we-do-sub-menu', __('What We Do Sub Menu'));
}
add_action ('init', 'register_tekera_what_we_do_custom_menu');

function register_tekera_how_we_do_it_custom_menu() {
	register_nav_menu('how-we-do-it-sub-menu', __('How We Do It Sub Menu'));
}
add_action ('init', 'register_tekera_how_we_do_it_custom_menu');


function register_tekera_get_involved_custom_menu() {
	register_nav_menu('get-involved-sub-menu', __('Get Involved Sub Menu'));
}
add_action ('init', 'register_tekera_get_involved_custom_menu');


add_action( 'rest_api_init', 'create_api_members_custom_field' );
 
function create_api_members_custom_field() {
 
    // register_rest_field ( 'name-of-post-type', 'name-of-field-to-return', array-of-callbacks-and-schema() )
    register_rest_field( 'members', 'first_name', array(
           'get_callback'    => function( $members_arr ) {
            return CFS()->get( first_name, $members_arr['id'] ); 
        },
           'schema'          => null,
        )
    );
    register_rest_field( 'members', 'last_name', array(
           'get_callback'    => function( $members_arr ) {
            return CFS()->get( last_name, $members_arr['id'] ); 
        },
           'schema'          => null,
        )
    );
    register_rest_field( 'members', 'job_title', array(
           'get_callback'    => function( $members_arr ) {
            return CFS()->get( job_title, $members_arr['id'] ); 
        },
           'schema'          => null,
        )
    );
    register_rest_field( 'members', 'summary', array(
           'get_callback'    => function( $members_arr ) {
            return CFS()->get( summary, $members_arr['id'] );
        },
           'schema'          => null,
        )
    );

    global $wp_rest_additional_fields;
}



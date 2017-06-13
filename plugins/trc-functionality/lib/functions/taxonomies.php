<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function register_program_type_taxonomy() {

	$labels = array(
		'name'                       => 'program types',
		'singular_name'              => 'program type',
		'menu_name'                  => 'program Type',
		'all_items'                  => 'All programs',
		'parent_item'                => 'Parent program',
		'parent_item_colon'          => 'Parent program:',
		'new_item_name'              => 'New programName',
		'add_new_item'               => 'Add New program',
		'edit_item'                  => 'Edit program',
		'update_item'                => 'Update program',
		'view_item'                  => 'View program',
		'separate_items_with_commas' => 'Separate programswith commas',
		'add_or_remove_items'        => 'Add or remove programs',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular programs',
		'search_items'               => 'Search programs',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No programs',
		'items_list'                 => 'programs list',
		'items_list_navigation'      => 'programs list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'program-type', array( 'programs' ), $args );

}
add_action( 'init', 'register_program_type_taxonomy', 0 );
<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom Taxonomy
function register_program_type_taxonomy() {

	$labels = array(
		'name'                       => 'Program Types',
		'singular_name'              => 'Program Type',
		'menu_name'                  => 'Program Type',
		'all_items'                  => 'All Programs',
		'parent_item'                => 'Parent Program',
		'parent_item_colon'          => 'Parent Program:',
		'new_item_name'              => 'New Program Name',
		'add_new_item'               => 'Add New Program',
		'edit_item'                  => 'Edit Program',
		'update_item'                => 'Update Program',
		'view_item'                  => 'View Program',
		'separate_items_with_commas' => 'Separate program types with commas',
		'add_or_remove_items'        => 'Add or remove programs',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular programs',
		'search_items'               => 'Search programs',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No programs',
		'items_list'                 => 'Programs list',
		'items_list_navigation'      => 'Programs list navigation',
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
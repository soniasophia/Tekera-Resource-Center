<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom Taxonomy
function register_project_type_taxonomy() {

	$labels = array(
		'name'                       => 'Project Types',
		'singular_name'              => 'Project Type',
		'menu_name'                  => 'Project Type',
		'all_items'                  => 'All Projects',
		'parent_item'                => 'Parent Project',
		'parent_item_colon'          => 'Parent Project:',
		'new_item_name'              => 'New Project Name',
		'add_new_item'               => 'Add New Project',
		'edit_item'                  => 'Edit Project',
		'update_item'                => 'Update Project',
		'view_item'                  => 'View Project',
		'separate_items_with_commas' => 'Separate project types with commas',
		'add_or_remove_items'        => 'Add or remove projects',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular projects',
		'search_items'               => 'Search projects',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No projects',
		'items_list'                 => 'Projects list',
		'items_list_navigation'      => 'Projects list navigation',
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
	register_taxonomy( 'project-type', array( 'projects' ), $args );

}
add_action( 'init', 'register_project_type_taxonomy', 0 );
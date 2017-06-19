<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function register_members_post_type() {

	$labels = array(
		'name'                  => 'Members',
		'singular_name'         => 'Member',
		'menu_name'             => 'Members',
		'name_admin_bar'        => 'Members',
		'archives'              => 'Member Archives',
		'attributes'            => 'Member Attributes',
		'parent_item_colon'     => 'Member Parent Item:',
		'all_items'             => 'All Members',
		'add_new_item'          => 'Add New Members',
		'add_new'               => 'Add New',
		'new_item'              => 'New Members',
		'edit_item'             => 'Edit Members',
		'update_item'           => 'Update Member',
		'view_item'             => 'View Member',
		'view_items'            => 'View Members',
		'search_items'          => 'Search Member',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Members',
		'uploaded_to_this_item' => 'Uploaded to this Member',
		'items_list'            => 'Members list',
		'items_list_navigation' => 'Members list navigation',
		'filter_items_list'     => 'Filter Members list',
	);
	$args = array(
		'label'                 => 'Member',
		'description'           => 'Tekera Resource Center members',
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'members', $args );

}
add_action( 'init', 'register_members_post_type', 0 );


// Register Custom Post Type
function custom_post_type_jobs() {
        $labels = array(
                'name'                  => 'Jobs',
                'singular_name'         => 'Job',
                'menu_name'             => 'Jobs',
                'name_admin_bar'        => 'Jobs',
                'archives'              => 'Job Archives',
                'attributes'            => 'Job Attributes',
                'parent_item_colon'     => 'Parent Job:',
                'all_items'             => 'All Jobs',
                'add_new_item'          => 'Add New Job',
                'add_new'               => 'Add New',
                'new_item'              => 'New Job',
                'edit_item'             => 'Edit Job',
                'update_item'           => 'Update Job',
                'view_item'             => 'View Job',
                'view_items'            => 'View Jobs',
                'search_items'          => 'Search Job',
                'not_found'             => 'Not found',
                'not_found_in_trash'    => 'Not found in Trash',
                'featured_image'        => 'Featured Image',
                'set_featured_image'    => 'Set featured image',
                'remove_featured_image' => 'Remove featured image',
                'use_featured_image'    => 'Use as featured image',
                'insert_into_item'      => 'Insert into Job',
                'uploaded_to_this_item' => 'Uploaded to this Job',
                'items_list'            => 'Jobs list',
                'items_list_navigation' => 'Jobs list navigation',
                'filter_items_list'     => 'Filter Jobs list',
        );
        $args = array(
                'label'                 => 'Job',
                'description'           => 'Job and volunteer opportunities',
                'labels'                => $labels,
                'supports'              => array( 'title', 'editor', ),
                'hierarchical'          => false,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 5,
                'menu_icon'             => 'dashicons-admin-tools',
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => false,
                'has_archive'           => true,               
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'capability_type'       => 'post',
        );
        register_post_type( 'jobs', $args );
}
add_action( 'init', 'custom_post_type_jobs', 0 );


// Register Custom Post Type
function custom_post_type_projects() {
    $labels = array(
        'name'                  => 'Projects',
        'singular_name'         => 'Project',
        'menu_name'             => 'Projects',
        'name_admin_bar'        => 'Projects',
        'archives'              => 'Project Archives',
        'attributes'            => 'Project Attributes',
        'parent_item_colon'     => 'Parent Project',
        'all_items'             => 'All Projects',
        'add_new_item'          => 'Add New Projects',
        'add_new'               => 'Add New',
        'new_item'              => 'New Projects',
        'edit_item'             => 'Edit Project',
        'update_item'           => 'Update Project',
        'view_item'             => 'View Project',
        'view_items'            => 'View Project',
        'search_items'          => 'Search Project',
        'not_found'             => 'Not found',
        'not_found_in_trash'    => 'Not found in Trash',
        'featured_image'        => 'Featured Image',
        'set_featured_image'    => 'Set featured image',
        'remove_featured_image' => 'Remove featured image',
        'use_featured_image'    => 'Use as featured image',
        'insert_into_item'      => 'Insert into Project',
        'uploaded_to_this_item' => 'Uploaded to this Project',
        'items_list'            => 'Projects list',
        'items_list_navigation' => 'Projects list navigation',
        'filter_items_list'     => 'Filter Projects list',
    );
    $args = array(
        'label'                 => 'Project',
        'description'           => 'Projects',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-multisite',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => false,
        'has_archive'           => true,     
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );
    register_post_type( 'projects', $args );
}
add_action( 'init', 'custom_post_type_projects', 0 );
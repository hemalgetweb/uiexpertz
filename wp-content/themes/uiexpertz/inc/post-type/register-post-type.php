<?php
// Register Custom Post Type for Project
function uiexpertz_custom_post_type_for_project() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'uiexpertz' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'uiexpertz' ),
		'menu_name'             => __( 'Project', 'uiexpertz' ),
		'name_admin_bar'        => __( 'Project', 'uiexpertz' ),
		'archives'              => __( 'Item Archives', 'uiexpertz' ),
		'attributes'            => __( 'Item Attributes', 'uiexpertz' ),
		'parent_item_colon'     => __( 'Parent Item:', 'uiexpertz' ),
		'all_items'             => __( 'All Project', 'uiexpertz' ),
		'add_new_item'          => __( 'Add New Item', 'uiexpertz' ),
		'add_new'               => __( 'Add New', 'uiexpertz' ),
		'new_item'              => __( 'New Project', 'uiexpertz' ),
		'edit_item'             => __( 'Edit Item', 'uiexpertz' ),
		'update_item'           => __( 'Update Item', 'uiexpertz' ),
		'view_item'             => __( 'View Item', 'uiexpertz' ),
		'view_items'            => __( 'View Items', 'uiexpertz' ),
		'search_items'          => __( 'Search Item', 'uiexpertz' ),
		'not_found'             => __( 'Not found', 'uiexpertz' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'uiexpertz' ),
		'featured_image'        => __( 'Featured Image', 'uiexpertz' ),
		'set_featured_image'    => __( 'Set featured image', 'uiexpertz' ),
		'remove_featured_image' => __( 'Remove featured image', 'uiexpertz' ),
		'use_featured_image'    => __( 'Use as featured image', 'uiexpertz' ),
		'insert_into_item'      => __( 'Insert into item', 'uiexpertz' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'uiexpertz' ),
		'items_list'            => __( 'Items list', 'uiexpertz' ),
		'items_list_navigation' => __( 'Items list navigation', 'uiexpertz' ),
		'filter_items_list'     => __( 'Filter items list', 'uiexpertz' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'uiexpertz' ),
		'description'           => __( 'Add your project', 'uiexpertz' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields', 'page-attributes', 'post-formats', 'excerpt' ),
		'taxonomies'            => array(),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'show_in_rest' => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'project', $args );
	$labels = array(
        'name' => _x('Project Categories', 'taxonomy general name'),
        'singular_name' => _x('Project Category', 'taxonomy singular name'),
        'search_items' => __('Search Project Categories'),
        'all_items' => __('All Project Categories'),
        'parent_item' => __('Parent Project Category'),
        'parent_item_colon' => __('Parent Project Category:'),
        'edit_item' => __('Edit Project Category'),
        'update_item' => __('Update Project Category'),
        'add_new_item' => __('Add New Project Category'),
        'new_item_name' => __('New Project Category Name'),
        'menu_name' => __('Project Categories'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_menu' => true,
    );

    register_taxonomy('project_category', array('project'), $args);

	$labels = array(
        'name' => _x('Project Service', 'project_service'),
        'singular_name' => _x('Project Service', 'project_service'),
        'search_items' => __('Search Project Service'),
        'all_items' => __('All Project Service'),
        'parent_item' => __('Parent Project Service'),
        'parent_item_colon' => __('Parent Project Service:'),
        'edit_item' => __('Edit Project Service'),
        'update_item' => __('Update Project Service'),
        'add_new_item' => __('Add New Project Service'),
        'new_item_name' => __('New Project Service Name'),
        'menu_name' => __('Project Service'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'show_in_menu' => true,
    );

    register_taxonomy('project_service', array('project'), $args);
    $labels = array(
        'name' => _x('Project Tags', 'project_tag'),
        'singular_name' => _x('Project Tag', 'project_tag'),
        'search_items' => __('Search Project Tags'),
        'all_items' => __('All Project Tags'),
        'edit_item' => __('Edit Project Tag'),
        'update_item' => __('Update Project Tag'),
        'add_new_item' => __('Add New Project Tag'),
        'new_item_name' => __('New Project Tag Name'),
        'menu_name' => __('Project Tags'),
    );

    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'project_tags'), // Set the URL slug here
        'show_in_menu' => true,
    );

    register_taxonomy('project_tags', array('project'), $args);
}
add_action( 'init', 'uiexpertz_custom_post_type_for_project', 0 );




// Register Custom Post Type for Service
function uiexpertz_custom_post_type_for_service() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'uiexpertz' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'uiexpertz' ),
		'menu_name'             => __( 'Service', 'uiexpertz' ),
		'name_admin_bar'        => __( 'Service', 'uiexpertz' ),
		'archives'              => __( 'Item Archives', 'uiexpertz' ),
		'attributes'            => __( 'Item Attributes', 'uiexpertz' ),
		'parent_item_colon'     => __( 'Parent Service:', 'uiexpertz' ),
		'all_items'             => __( 'All Services', 'uiexpertz' ),
		'add_new_item'          => __( 'Add New Service', 'uiexpertz' ),
		'add_new'               => __( 'Add New', 'uiexpertz' ),
		'new_item'              => __( 'New Service', 'uiexpertz' ),
		'edit_item'             => __( 'Edit Item', 'uiexpertz' ),
		'update_item'           => __( 'Update Item', 'uiexpertz' ),
		'view_item'             => __( 'View Item', 'uiexpertz' ),
		'view_items'            => __( 'View Items', 'uiexpertz' ),
		'search_items'          => __( 'Search Item', 'uiexpertz' ),
		'not_found'             => __( 'Not found', 'uiexpertz' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'uiexpertz' ),
		'featured_image'        => __( 'Featured Image', 'uiexpertz' ),
		'set_featured_image'    => __( 'Set featured image', 'uiexpertz' ),
		'remove_featured_image' => __( 'Remove featured image', 'uiexpertz' ),
		'use_featured_image'    => __( 'Use as featured image', 'uiexpertz' ),
		'insert_into_item'      => __( 'Insert into item', 'uiexpertz' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'uiexpertz' ),
		'items_list'            => __( 'Items list', 'uiexpertz' ),
		'items_list_navigation' => __( 'Items list navigation', 'uiexpertz' ),
		'filter_items_list'     => __( 'Filter items list', 'uiexpertz' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'uiexpertz' ),
		'description'           => __( 'Add your service', 'uiexpertz' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields', 'page-attributes', 'post-formats', 'excerpt' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tools',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
// add_action( 'init', 'uiexpertz_custom_post_type_for_service', 0 );
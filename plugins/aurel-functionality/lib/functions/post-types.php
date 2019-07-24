<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function aurel_team() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Aurel Team', 'text_domain' ),
		'name_admin_bar'        => __( 'Aurel Team', 'text_domain' ),
		'archives'              => __( 'Aurel Team Archives', 'text_domain' ),
		'attributes'            => __( 'Aurel Team Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Members', 'text_domain' ),
		'add_new_item'          => __( 'Add New Member', 'text_domain' ),
		'add_new'               => __( 'Add New Member', 'text_domain' ),
		'new_item'              => __( 'New Member', 'text_domain' ),
		'edit_item'             => __( 'Edit Member', 'text_domain' ),
		'update_item'           => __( 'Update Member', 'text_domain' ),
		'view_item'             => __( 'View Member', 'text_domain' ),
		'view_items'            => __( 'View Members', 'text_domain' ),
		'search_items'          => __( 'Search Member', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Profile Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set Profile image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove profile image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as profile image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into member', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this member', 'text_domain' ),
		'items_list'            => __( 'Member list', 'text_domain' ),
		'items_list_navigation' => __( 'Members list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter member list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Team Member', 'text_domain' ),
		'description'           => __( 'aurel team', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'aurel-team', $args );

}
add_action( 'init', 'aurel_team', 0 );

// Register Custom Post Type
function newsletters() {

	$labels = array(
		'name'                  => _x( 'Newsletter', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Newsletter', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Newsletters', 'text_domain' ),
		'name_admin_bar'        => __( 'Newsletters', 'text_domain' ),
		'archives'              => __( 'Newsletter Archives', 'text_domain' ),
		'attributes'            => __( 'Newsletter Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Newsletter:', 'text_domain' ),
		'all_items'             => __( 'All Newsletters', 'text_domain' ),
		'add_new_item'          => __( 'Add New Newsletter', 'text_domain' ),
		'add_new'               => __( 'Add New Newsletter', 'text_domain' ),
		'new_item'              => __( 'New Newsletter', 'text_domain' ),
		'edit_item'             => __( 'Edit Newsletter', 'text_domain' ),
		'update_item'           => __( 'Update Newsletter', 'text_domain' ),
		'view_item'             => __( 'View Newsletter', 'text_domain' ),
		'view_items'            => __( 'View Newsletters', 'text_domain' ),
		'search_items'          => __( 'Search Newsletter', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into newsletter', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this newsletter', 'text_domain' ),
		'items_list'            => __( 'Newsletters list', 'text_domain' ),
		'items_list_navigation' => __( 'Newsletters list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter newsletters list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Newsletter', 'text_domain' ),
		'description'           => __( 'Newsletters', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-align-right',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'newsletters', $args );

}
add_action( 'init', 'newsletters', 0 );
<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function custom_taxonomy_content_type() {

	$labels = array(
		'name'                       => _x( 'Content types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Content type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Content Type', 'text_domain' ),
		'all_items'                  => __( 'All Content Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Content Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Content Type:', 'text_domain' ),
		'new_item_name'              => __( 'Content Type Name', 'text_domain' ),
		'add_new_item'               => __( 'Add a Content Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Content Type', 'text_domain' ),
		'update_item'                => __( 'Update Content Type', 'text_domain' ),
		'view_item'                  => __( 'View Content Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Content Types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Content Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Content Types', 'text_domain' ),
		'search_items'               => __( 'Search Content Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Features list', 'text_domain' ),
		'items_list_navigation'      => __( 'Features list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'content_type', array( 'version_history' ), $args );

}
add_action( 'init', 'custom_taxonomy_content_type', 0 );
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
function red_starter_body_classes($classes)
{
	// Adds a class of group-blog to blogs with more than 1 published author.
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter('body_class', 'red_starter_body_classes');

//display the all the team members
function aurel_get_members()
{
	$args = array(
		'post_type' => 'aurel-team', 'posts_per_page' => -1,   'orderby' => 'date',
		'order'   => 'ASC',
	);
	$members = get_posts($args);
	return $members;
}
function aurel_get_newsletters()
{
	$args = array(
		'post_type' => 'newsletters', 'posts_per_page' => -1,   'orderby' => 'date',
		'order'   => 'DEC',
	);
	$newsletters = get_posts($args);
	return $newsletters;
}
function aurel_get_updates()
{
	$args = array(
		'post_type' => 'post', 'posts_per_page' => -1,   'orderby' => 'date',
		'order'   => 'DEC', 'category_name' => 'new-features',
	);
	$updates = get_posts($args);
	return $updates;
}

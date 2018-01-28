<?php

/*
 * Registers the theme's menus.
 */
function register_my_menus() {
	register_nav_menus ( array (
			'navigation_menu_location' => __ ( 'Navigation menu location' ) 
	) );
}
add_action ( 'init', 'register_my_menus' );

/*
 * Adds HTML5 support.
 */
function enable_html5() {
	add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'enable_html5' );

/*
 * Enables support for custom header images.
 */
function enable_custom_header() {
	add_theme_support ( 'custom-header', array (
			'default-image' => get_template_directory_uri () . 'images/default-image',
			'default-text-color' => '000',
			'flex-width' => true,
			'flex-height' => true 
	) );
}
add_action ( 'after_setup_theme', 'enable_custom_header' );

/*
 * Enables support for featured images.
 */
function enable_featured_images() {
	add_theme_support ( 'post-thumbnails' );
}
add_action ( 'after_setup_theme', 'enable_featured_images' );

/*
 * Removes width and height attributes from images.
 */
function remove_img_attr($html) {
	return preg_replace ( '/(width|height)="\d+"\s/', "", $html );
}

add_filter ( 'post_thumbnail_html', 'remove_img_attr' );
?>
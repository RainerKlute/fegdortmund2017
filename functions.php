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
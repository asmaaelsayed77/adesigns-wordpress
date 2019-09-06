<?php 

// enable featured images in pages and posts.
	add_theme_support('post-thumbnails');

// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

// Theme setup 
function wpbasics_theme_setup () {
	//Nav Menus
	register_nav_menus( array(
		'primary' => __( 'Primary Menu' )

	) );

}

add_action('after_setup_theme', 'wpbasics_theme_setup');

//Enable Widget-ized Sidebar 
if ( function_exists('register_sidebar') ) register_sidebar();

//Code for custom background support
    add_custom_background();
?>



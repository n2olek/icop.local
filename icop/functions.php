<?php

add_filter( 'auto_update_plugin', '__return_false' );
add_filter( 'auto_update_theme', '__return_false' );
add_filter( 'auto_update_translation', '__return_false' );

define( 'THEME_URI', get_stylesheet_directory_uri());
define( 'THEME_TEXTDOMAIN', 'icop' );
define( 'ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
define( 'CSSJS_VERSION', '1.1' );

add_action('wp_enqueue_scripts', 'theme_enqueue_styles', PHP_INT_MAX);
function theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('child-style', THEME_URI . '/assets/css/custom-style.css', array(), CSSJS_VERSION, 'all');
}

add_action('upload_mimes', 'add_file_types_to_uploads');
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}


// add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
// function theme_enqueue_styles() {
// 	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
// 	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/style.css',
// 	array('parent-style')
// );

// }
<?php
/**
 * Twenty Twenty-four - Child function and definitions
 * 
 * @link 
 * @since Twenty Twenty-four - Child
 */

 function twentytwentyfour_child_enqueue_scripts(){
    wp_enqueue_style( 
		'child-style', 
		get_parent_theme_file_uri() . '/style.css'
	);
 }

 add_action( 'wp_enqueue_scripts', 'twentytwentyfour_child_enqueue_scripts' );
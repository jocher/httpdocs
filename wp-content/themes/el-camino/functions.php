<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
//
// Your code goes below
//
function mychildtheme_setup() {
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'secondary', __( 'Footer Menu', 'twentyeleven' ) );
	
	}
 add_action( 'after_setup_theme', 'mychildtheme_setup', 11 );
 
 // Create Slider Post Type
require( get_template_directory() . '/inc/slider/slider_post_type.php' );
// Create Slider
require( get_template_directory() . '/inc/slider/slider.php' );
<?php
/**
 * _s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! function_exists( '_s_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function CodeCode_setup() {

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

}
endif;

add_action( 'after_setup_theme', 'CodeCode_setup' );
/**
 * Enqueues scripts and styles.
 *
 */
add_action( 'wp_enqueue_scripts', 'CodeCode_scripts_styles' );

function CodeCode_scripts_styles() {

	// Theme stylesheet.
	wp_enqueue_style( 'CodeCode-style', get_stylesheet_uri() );

	// CodeCode stylesheet.
	wp_enqueue_style( 'CCWP', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all' );

	// CodeCode main.js.
	wp_enqueue_script( 'twentysixteen-script', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
}

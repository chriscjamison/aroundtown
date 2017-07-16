<?php
/**
 * Twenty Sixteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if ( ! function_exists( 'ccjdev_at_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own twentysixteen_setup() function to override in a child theme.
 *
 * @since Twenty Sixteen 1.0
 */
function ccjdev_at_setup() {
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'ccjdev_at' ),
		'footer'  => __( 'Footer Menu', 'ccjdev_at' ),
	) );

	
}
endif; // twentysixteen_setup
add_action( 'after_setup_theme', 'ccjdev_at_setup' );

function ccjdev_at_scripts() {
	// Theme stylesheet.
	wp_enqueue_style( 'main-css', get_stylesheet_uri() );
	
	// JQuery 3.0.0
	wp_enqueue_script( 'jquery-3', '/wp-content/themes/ccjdev_at/assets/js/jquery-3.0.0.js');
	
	// Theme 'main' javascript file - Handles comment form and other page layout fixes.
	wp_enqueue_script( 'main-js', '/wp-content/themes/ccjdev_at/assets/js/main.js');
}
add_action( 'wp_enqueue_scripts', 'ccjdev_at_scripts' );

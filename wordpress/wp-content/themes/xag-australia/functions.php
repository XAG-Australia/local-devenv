<?php
/**
 * Child Theme functions and definitions.
 * This theme is a child theme for Techup.
 *
 * @subpackage FullScreen-techup
 * @author  wptexture http://testerwp.com/
 * @license http://www.gnu.org/licenses/gpl-3.0.html GNU Public License
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */

/**
 * Theme functions and definitions.
 */
 
add_action( 'wp_enqueue_scripts', 'fullscreen_techup_child_css',25);
function fullscreen_techup_child_css() {
	wp_enqueue_style( 'fullscreen-techup-parent-theme-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'fullscreen-techup-child-style',get_stylesheet_directory_uri() . '/child-css/child.css');
	wp_enqueue_script( 'fullscreen-techup-custom-script', get_stylesheet_directory_uri() . '/child-js/custom-script.js');
	wp_enqueue_script( 'slidr', get_stylesheet_directory_uri() . '/slidr-master/slidr.min.js');
	wp_enqueue_script( 'slidrr', get_stylesheet_directory_uri() . '/slidr-master/slidr.js');
	

 
}

/**
 * Custom Hooks defined 
 */
require get_template_directory() . '/inc/custom-hooks/cv-custom-hooks.php';
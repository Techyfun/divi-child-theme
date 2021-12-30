<?php
/*
 * Child theme functions and definitions
 * @link https://developer.wordpress.org/themes/basics/theme-functions
 * @package Child Theme
 * @since 1.0.0
 * @copyright 2022
 * @author Sajjad
 */

if (!defined('ABSPATH')) die();
function ds_ct_enqueue_parent() { wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); }

function ds_ct_loadjs() {
	wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . '/ds-script.js',
        array( 'jquery' )
    );
}
add_action( 'wp_enqueue_scripts', 'ds_ct_enqueue_parent' );
add_action( 'wp_enqueue_scripts', 'ds_ct_loadjs' );
include('login-editor.php');

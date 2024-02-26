<?php

/**
 * clutch Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package clutch
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_CLUTCH_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
	wp_enqueue_style('clutch-theme-css', get_stylesheet_directory_uri() . '/css/main.css', array('astra-theme-css'), CHILD_THEME_CLUTCH_VERSION, 'all');
	wp_enqueue_style('clutch-shop-css', get_stylesheet_directory_uri() . '/dist/shop.css');
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

function jquery_js()
{
	wp_enqueue_script('jquery_js', get_stylesheet_directory_uri() . '/js/jquery-3.4.1.min.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'jquery_js');

function bootstrap_js()
{
	wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'bootstrap_js');

function custom_js()
{
	wp_enqueue_script('custom_js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'custom_js');


function wow_js()
{
	wp_enqueue_script('wow_js', get_stylesheet_directory_uri() . '/js/wow.min.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'wow_js');

if (function_exists('acf_add_options_page')) {

	acf_add_options_page();
}

function update_cart()
{
	global $woocommerce;
	echo $woocommerce->cart->cart_contents_count;
	die();
}
add_action("wp_ajax_update_cart", "update_cart");
add_action("wp_ajax_nopriv_update_cart", "update_cart");
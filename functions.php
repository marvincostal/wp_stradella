<?php
/**
*
* Define Values for STRADELLA
* PHONE_NUMBER
* EMAIL_PRIMARY
* EMAIL_SECONDARY
**/

define('IMG', get_template_directory_uri() . '/img');
define('JS', get_template_directory_uri() . '/js');
define('CSS', get_template_directory_uri() . '/css');

/**
*
* Function Includes
*
**/
require_once('includes/post-type.php');


/**
*
* Theme Support
*
**/
add_theme_support('post-thumbnails');



/**
* Scripts
*
* @param string $handle Script name
* @param string $src Script url
* @param array $deps (optional) Array of script names on which this script depends
* @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
* @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
*/
function stradella_scripts() {
	wp_deregister_script('jquery' );
	wp_register_script( 'jquery', 'https://code.jquery.com/jquery-1.11.2.min.js', array(), false, true );
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'modernizr', JS . '/modernizr-2.8.3.min.js', array() , null, false );
	wp_enqueue_script( 'date_picker', JS . '/bootstrap-datepicker.js', 'jquery', null, true );
	wp_enqueue_script( 'carousel', JS . '/bootstrap/carousel.js', 'jquery', null, true );
	wp_enqueue_script( 'dropdown', JS . '/bootstrap/dropdown.js', 'jquery', null, true );
	wp_enqueue_script( 'tab', JS . '/bootstrap/tab.js', 'jquery', null, true );
	wp_enqueue_script( 'main_js', JS . '/main.js', 'jquery', null, true );
}

add_action( 'wp_enqueue_scripts', 'stradella_scripts' );


/**
* Stylesheet
*
* @param string $handle style name
* @param string $src style url
* @param array $deps (optional) Array of script names on which this style depends
* @param string|bool $ver (optional) Style version (used for cache busting), set to null to disable
*/
function stradella_styles() {
	wp_enqueue_style( 'bootstrap', CSS . '/bootstrap.css', array(), null);
	wp_enqueue_style( 'main_css', CSS . '/main.css', 'bootstrap', null);
}

add_action( 'wp_enqueue_scripts', 'stradella_styles' );
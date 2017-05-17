<?php 

function load_small_theme_scripts_styles() {
	// load styles
	wp_enqueue_style('main-styles', get_template_directory_uri().'/css/app.css');
	// load scripts
	wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js');
	wp_enqueue_script('main-js', get_template_directory_uri().'/js/app.js');
}

add_action('wp_enqueue_scripts', 'load_small_theme_scripts_styles');



/**
* will one day find out what this is actually for but for now slap it in and see if it lets me pass * requierments
*/
if ( ! isset( $content_width ) ) $content_width = 900;

/**
* register main nav
*/

register_nav_menus(array(
	'main-nav' => 'Main Navigation',
	'footer-nav' => 'Footer Navigation'
));


/**
* register side bar
*/

add_action('widgets_init', 'small_widgets_init');
function small_widgits_init() {
	register_sidebar(array(
		'name' => 'main-sidebar',
		'description' => 'This is the main sidebar',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
		)
	);
}

/**
* Add theme support for thumbs, custom header and background image
*/

add_theme_support( "title-tag" );
add_theme_support( 'automatic-feed-links' );
add_theme_support('post-thumbnails');
add_theme_support('custom-background');
add_theme_support('custom-header');

?>
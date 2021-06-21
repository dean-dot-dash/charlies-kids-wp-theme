<?php

function charlieskids_theme_support(){
	// Adds dynamic title tag support
	add_theme_support('title-tag');
	$defaults = array(
		'height' => 51,
		'width' => 331,
	);
	add_theme_support('custom-logo', $defaults);
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'charlieskids_theme_support');

function charlieskids_menus() {

	$locations = array(
		'primary' => "Desktop Primary Header Menu",
		'footer' => "Footer Menu"
	);

	register_nav_menus($locations);

}

add_action('init', 'charlieskids_menus');

// function charlieskids_widgets() {

// 	register_sidebar(
// 		array(
// 			'name' => 'Sidebar',
// 			'id' => 'sidebar1',
// 		)
// 	);
// }

// add_action('widgets_init', 'charlieskids_widgets');

function charlieskids_register_styles(){

	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style('charlieskids-main', get_template_directory_uri() . "/style.css", array(), $version, 'all');

}

add_action('wp_enqueue_scripts', 'charlieskids_register_styles');

function charlieskids_register_scripts(){

	wp_enqueue_script('charlieskids-jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);  
	wp_enqueue_script('charlieskids-scollmagic', 'http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js', array(), '2.0.7', true);  
	// wp_enqueue_script('charlieskids-scollmagic-plugins', 'http://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array(), '2.0.7', true);  
	wp_enqueue_script('charlieskids-navigation', get_template_directory_uri() . "/assets/js/navigation.js", array(), '1.0', true);  
	wp_enqueue_script('charlieskids-scroll', get_template_directory_uri() . "/assets/js/scroll.js", array(), '1.0', true);  
}

add_action('wp_enqueue_scripts', 'charlieskids_register_scripts');

function charlieskids_register_event_post_type() {

	$labels = array(
		'name' => __('Events'),
		'singular_name' => __('Event'),
		'add_new' => __('New Event'),
		'add_new_item' => __('Add New Event'),
		'edit_item' => __('Edit Event'),
		'new_item' => __('New Event'),
		'view_item' => __('View Event'),
		'search_items' => __('Search Events'),
		'not_found' => __('No Event Found'),
		'not_found_in_trash' => __('No Event Found in Trash'),
	);
	$args = array(
		'labels' => $labels,
		'has_archive' => true,
		'public' => true,
		'hierarchical' => false,
		'supports' => array(
			'title',
			'editor',
			'excerpt',
			'custom-fields',
			'thumbnail',
			'page-attributes'
		),
		'show_in_rest' => true,
		'rewrite' => array( 'slug' => 'events' ),
	);
	register_post_type( 'charlieskids_event', $args);
}

add_action('init', 'charlieskids_register_event_post_type');

?>

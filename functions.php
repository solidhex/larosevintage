<?php

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );

function larose_scripts()
{
	// Theme stylesheets.
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'site', get_template_directory_uri() . '/assets/css/site.css' );
}

add_action( 'wp_enqueue_scripts', 'larose_scripts' );

?>
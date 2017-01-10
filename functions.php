<?php

add_theme_support( 'title-tag' );

function larose_scripts()
{
	// Theme stylesheets.
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'site', get_template_directory_uri() . '/assets/css/site.css' );
}

add_action( 'wp_enqueue_scripts', 'larose_scripts' );

function larose_widgets_init()
{
	
	register_sidebar( array(
		'name'			=> 'Welcome Message 1',
		'id'			=> 'welcome_message_1',
		'before_widget'	=> '<div>',
		'after_widget'	=> '</div>'
	) );
	
}

// add_action( 'widgets_init', 'larose_widgets_init' );

?>
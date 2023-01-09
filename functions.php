<?php

/**
 * Proper way to enqueue scripts and styles
 */
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'gabbie-styles', get_template_directory_uri() . '/dist/app.css' );
	wp_enqueue_script( 'gabbie-scripts', get_template_directory_uri() . '/dist/js/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
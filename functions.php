<?php

/**
 * Proper way to enqueue scripts and styles
 */
function gabbie_scripts() {
	wp_enqueue_style( 'gabbie-styles', get_template_directory_uri() . '/dist/app.css' );
	wp_enqueue_script( 'gabbie-scripts', get_template_directory_uri() . '/dist/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'gabbie_scripts' );


function hide_admin_bar() {
	show_admin_bar( false );
}
add_action( 'init', 'hide_admin_bar' );

function my_custom_menu() {
    register_nav_menus(
        array(
            'main-menu' => _( 'Main Menu' )        )
    );
}
add_action( 'init', 'my_custom_menu' );
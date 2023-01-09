<?php

/**
 * Proper way to enqueue scripts and styles
 */
function gabbie_scripts() {
	wp_enqueue_style( 'gabbie-styles', get_template_directory_uri() . '/dist/app.css' );
	wp_enqueue_script( 'gabbie-scripts', get_template_directory_uri() . '/dist/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'gabbie_scripts' );

function enable_thumbnails() {
	add_theme_support( 'post-thumbnails' );
}
add_action( 'init', 'enable_thumbnails' );

function hide_admin_bar() {
	show_admin_bar( false );
}
add_action( 'init', 'hide_admin_bar' );

function gabbie_custom_menu() {
    register_nav_menus(
        array(
            'main-menu' => _( 'Main Menu' )        )
    );
}
add_action( 'init', 'gabbie_custom_menu' );

function remove_archive_title_prefixes( $title, $original_title ) { 
	return $original_title; 
} 
add_filter( 'get_the_archive_title', 'remove_archive_title_prefixes', 10, 2 );

function gabbie_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'gabbie_excerpt_more');

function gabbie_excerpt_length($length){
	return 40; 
}
add_filter('excerpt_length', 'gabbie_excerpt_length');

function get_featured_or_first_image_url( $post_id ) {
	if( has_post_thumbnail() ) {
		return get_the_post_thumbnail_url( $post_id, 'large' );
	}

	$blocks = parse_blocks( get_the_content($post_id) );

	foreach( $blocks as $block ) {
		if( $block['blockName'] === 'core/image' ) {
			$xpath = new DOMXPath(@DOMDocument::loadHTML($block['innerHTML']));
			$src = $xpath->evaluate("string(//img/@src)");

			return $src;
		}
	}

	return '#';
}

function get_publication_image_url() {
	$categories = get_the_category();

	foreach( $categories as $category ) {
		if( $category->parent ) {
			continue;
		}

		return get_field( 'publication_logo_square', $category );
	}

	return false;
}
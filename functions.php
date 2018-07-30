<?php

function my_theme_enqueue_styles() {

	$parent_style = 'twentyfifteen-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version')
	);
	wp_enqueue_style('child-style-custom',
		get_stylesheet_directory_uri() . '/custom.css',
		wp_get_theme()->get('Version')
	);
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function fb_home_image( $tags ) {
	if ( is_home() || is_front_page() ) {
		// Remove the default blank image added by Jetpack
		unset( $tags['og:image'] );
		unset( $tags['twitter:image'] );

		$custom_logo_id = get_theme_mod( 'custom_logo' );
		if($custom_logo_id) {
			$fb_home_img = wp_get_attachment_image_url( $custom_logo_id, 'full', false );
			$tags['og:image'] = esc_url( $fb_home_img );
			$tags['twitter:image'] = esc_url( $fb_home_img );
		}
	}
	return $tags;
}
add_filter( 'jetpack_open_graph_tags', 'fb_home_image' );
<?php

/**
 * Shadhin functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Shadhin
 * @since v1.0.0
 */

if ( ! function_exists( 'shadhin_theme_support' ) ) {
	function shadhin_theme_support() {
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'align-wide' );
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'responsive-embeds' );

		add_theme_support( 'title-tag' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);
	}
}

add_action( 'after_setup_theme', 'shadhin_theme_support' );

function shadhin_enqueue_custom_styles() {
    wp_enqueue_style( 'shadhin-custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'shadhin-local-fonts', get_template_directory_uri() . '/assets/fonts/inter.css', array(), null );
}
add_action( 'wp_enqueue_scripts', 'shadhin_enqueue_custom_styles' );

// function shadhin_enqueue_styles() {
//     // Enqueue your theme's main stylesheet.
//     wp_enqueue_style( 'shadhin-style', get_stylesheet_uri() );

//     // Add dynamic inline CSS for the background image.
//     $background_image_url = esc_url( get_template_directory_uri() . '/assets/images/hero-bg.jpg' );
//     $custom_css = "
//         .shadhin-hero {
//             background-image: url('{$background_image_url}');
//             background-position: 50% 50%;
// 			background-size: cover;
//             padding-top: 10rem;
//             padding-bottom: 10rem;
//             margin-top: 0;
//             margin-bottom: 0;
//         }
//     ";
//     wp_add_inline_style( 'shadhin-style', $custom_css );
// }
// add_action( 'wp_enqueue_scripts', 'shadhin_enqueue_styles' );

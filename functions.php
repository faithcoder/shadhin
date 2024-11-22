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

function shadhin_register_block_patterns() {
    if ( function_exists( 'register_block_pattern' ) ) {
        register_block_pattern(
            'shadhin/custom-pattern',
            array(
                'title'       => __( 'Shadhin Custom Pattern', 'shadhin' ),
                'description' => _x( 'A custom block pattern for the Shadhin theme.', 'Block pattern description', 'shadhin' ),
                'content'     => "<!-- wp:paragraph --><p>" . __( 'This is a custom block pattern from the Shadhin theme.', 'shadhin' ) . "</p><!-- /wp:paragraph -->",
            )
        );
    }
}
add_action( 'init', 'shadhin_register_block_patterns' );


function shadhin_register_block_styles() {
    if ( function_exists( 'register_block_style' ) ) {
        // Register a custom style for core paragraph block
        register_block_style(
            'core/paragraph',
            array(
                'name'  => 'shadhin-custom-paragraph',
                'label' => __( 'Shadhin Custom Paragraph', 'shadhin' ),
            )
        );
        // You can add more block styles here for other core blocks
    }
}
add_action( 'init', 'shadhin_register_block_styles' );



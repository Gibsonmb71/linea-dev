<?php
/**
 * Weekly Wildcat theme functions.
 *
 * @package WeeklyWildcat
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'WEEKLY_WILDCAT_VERSION', '0.1.0' );

/**
 * Theme setup.
 */
function weekly_wildcat_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'automatic-feed-links' );

	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'weekly_wildcat_setup' );

/**
 * Enqueue front-end assets.
 */
function weekly_wildcat_enqueue_assets() {
	wp_enqueue_style(
		'weekly-wildcat-style',
		get_stylesheet_uri(),
		array(),
		WEEKLY_WILDCAT_VERSION
	);

	wp_enqueue_script(
		'weekly-wildcat-theme',
		get_template_directory_uri() . '/assets/js/theme.js',
		array(),
		WEEKLY_WILDCAT_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'weekly_wildcat_enqueue_assets' );

/**
 * Register custom block pattern categories.
 */
function weekly_wildcat_register_pattern_categories() {
	register_block_pattern_category(
		'weekly-wildcat-homepage',
		array( 'label' => __( 'Weekly Wildcat Homepage', 'weekly-wildcat' ) )
	);
}
add_action( 'init', 'weekly_wildcat_register_pattern_categories' );

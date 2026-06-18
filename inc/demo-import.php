<?php
/**
 * Demo import integrations for Linea.
 *
 * @package Linea
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register the bundled WXR file with the One Click Demo Import plugin.
 *
 * @return array<int, array<string, mixed>>
 */
function linea_ocdi_import_files() {
	return array(
		array(
			'import_file_name'             => __( 'Linea student newspaper demo', 'linea' ),
			'categories'                   => array( __( 'Student Newspaper', 'linea' ) ),
			'local_import_file'            => get_template_directory() . '/demo-content/linea-demo-content.xml',
			'import_notice'                => __( 'Imports sample newspaper categories, stories, comments, and placeholder featured media. Existing content is left in place.', 'linea' ),
			'preview_url'                  => home_url( '/' ),
			'import_preview_image_url'     => get_template_directory_uri() . '/screenshot.png',
			'import_file_id'               => 'linea-student-newspaper',
			'local_import_customizer_file' => '',
		),
	);
}
add_filter( 'ocdi/import_files', 'linea_ocdi_import_files' );

/**
 * Set useful defaults after a One Click Demo Import run.
 */
function linea_ocdi_after_import() {
	update_option( 'blogname', 'The Campus Chronicle' );
	update_option( 'blogdescription', 'Independent. Student-run. Always informed.' );
	update_option( 'show_on_front', 'posts' );
}
add_action( 'ocdi/after_import', 'linea_ocdi_after_import' );

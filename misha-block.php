<?php
/*
 * Plugin name: dfsdfhsdfsdf
 */

//add_action( 'enqueue_block_editor_assets', 'rudr_block_assets' );
function rudr_block_assets(){

	wp_enqueue_script(
 		'misha-block',
		plugin_dir_url( __FILE__ ) . 'build/index.js',
		array( 'wp-blocks', 'wp-element' ),
		filemtime( __DIR__ . '/build/index.js' )
	);

	wp_enqueue_style(
		'misha-block',
		plugin_dir_url( __FILE__ ) . 'assets/style.css',
		array(),
		filemtime( __DIR__ . '/assets/style.css' )
	);

}

add_action( 'init', 'rudr_register_in_php' );

function rudr_register_in_php() {

	// wp_register_script(
 	// 	'misha-block-js',
	// 	plugin_dir_url( __FILE__ ) . 'build/index.js',
	// 	array( 'wp-blocks', 'wp-element' ),
	// 	filemtime( __DIR__ . '/build/index.js' )
	// );

// 	register_block_type(
// 		'rudr/newsletter',
// 		array(
// 				'editor_script'   => 'misha-block-js',
// 				'editor_style'    => 'misha-block-css'
// 		)
// );
	register_block_type( __DIR__ );

}

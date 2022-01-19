<?php 

function custom_scripts() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/dist/app.css' );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/dist/app.js', array(), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );

function be_gutenberg_scripts() {
	wp_enqueue_script(
		'be-editor', 
		get_stylesheet_directory_uri() . '/resources/js/components/editor.js', 
		array( 'wp-blocks', 'wp-dom' ), 
		filemtime( get_stylesheet_directory() . '/resources/js/components/editor.js' ),
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'be_gutenberg_scripts' );

add_theme_support( 'editor-styles' );
add_editor_style( 'dist/editor-style.css' );

add_theme_support( 'align-wide' );

// -- Disable custom font sizes
add_theme_support( 'disable-custom-font-sizes' );

// -- Editor Font Sizes
add_theme_support( 'editor-font-sizes', array(
	array(
		'name'      => __( 'Small', 'ea_genesis_child' ),
		'shortName' => __( 'S', 'ea_genesis_child' ),
		'size'      => 20,
		'slug'      => 'small'
	),
	array(
		'name'      => __( 'Normal', 'ea_genesis_child' ),
		'shortName' => __( 'M', 'ea_genesis_child' ),
		'size'      => 30,
		'slug'      => 'normal'
	),
	array(
		'name'      => __( 'Large', 'ea_genesis_child' ),
		'shortName' => __( 'L', 'ea_genesis_child' ),
		'size'      => 40,
		'slug'      => 'large'
	),
) );

// -- Disable Custom Colors
add_theme_support( 'disable-custom-colors' );

// -- Editor Color Palette
add_theme_support( 'editor-color-palette', array(
	array(
		'name'  => __( 'Blue', 'ea_genesis_child' ),
		'slug'  => 'blue',
		'color'	=> '#59BACC',
	),
	array(
		'name'  => __( 'Green', 'ea_genesis_child' ),
		'slug'  => 'green',
		'color' => '#58AD69',
	),
) );


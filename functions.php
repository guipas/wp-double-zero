<?php

require_once('extras/wp_bootstrap_navwalker.php');
require_once('extras/breadcrumbs.php');
require_once('extras/wp_bootstrap_pagination.php');


/**
* Setting up the theme
* 
*/
function doublezero_theme_setup() {
	add_theme_support( 'custom-header', array(
		'default-image' => get_template_directory_uri() . '/img/doublezero.png',
	));
}
add_action( 'after_setup_theme', 'doublezero_theme_setup' );


/**
 * Register widget area.
 *
 */
function doublezero_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'doublezero' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'doublezero' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s col-md-3 col-sm-6 col-xs-12">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'doublezero_widgets_init' );


/**
 * The top menu
 *
 */
function doublezero_menu_register() {
  register_nav_menu( 'top', __( 'top', 'Top Menu' ) );
}
add_action( 'after_setup_theme', 'doublezero_menu_register' );


/**
 * Enqueue scripts and styles.
 *
 */
function doublezero_scripts() {

	// Load our main stylesheet (including bootstrap).
	wp_enqueue_style( 'doublezero-css', get_template_directory_uri() . '/css/doublezero.css');

	//wp_enqueue_style( 'doublezero-hovernav', get_template_directory_uri() . '/css/hovernav.css', array( 'doublezero-bootstrap-theme' ) );

	//load bootstraps's js
	wp_enqueue_script( 'doublezero-bootsrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	//wp_enqueue_script( 'doublezero-hovernav-js', get_template_directory_uri() . '/js/hovernav.js', array('doublezero-bootsrap-js'), '', true );

	// our custom js
	wp_enqueue_script( 'doublezero-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'doublezero_scripts' );


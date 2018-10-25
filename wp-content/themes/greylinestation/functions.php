<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

// function myprefix_load_css_and_js() {
//     wp_enqueue_style( 'style', get_stylesheet_uri() );
// }
// add_action( 'wp_enqueue_scripts', 'myprefix_load_css_and_js' );

?>
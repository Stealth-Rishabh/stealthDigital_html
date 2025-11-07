<?php
add_action( 'wp_enqueue_scripts', 'my_plugin_add_stylesheet' );
function my_plugin_add_stylesheet() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', 'all' );
	wp_enqueue_style( 'my-style', get_stylesheet_directory_uri() . '/style.css', true, time(), 'all' );
    wp_enqueue_style( 'style-new', get_stylesheet_directory_uri() . '/css/style.css', true, time(), 'all' );
    wp_enqueue_script( 'my-js', get_stylesheet_directory_uri() . '/js/custom.js', true, time(), 'all' );
}

add_filter('astra_footer_sml_section_1_credit', function() {
    return 'Copyright © 2025 GLBIMR | All Rights <a style="cursor: default; color: inherit; text-decoration: none;" href="https://www.glbimr.org">Reserved</a>';
});
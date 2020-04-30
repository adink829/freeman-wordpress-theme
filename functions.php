<?php
function wp_enqueue_styles() {
    wp_enqueue_style( 'theme.css', get_template_directory_uri() . '/theme.css', array(), '0.0.1');
    wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css', array(), '0.0.1');
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_styles' );
?>
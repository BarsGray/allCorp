<?php

function diakord_styles() {
    wp_enqueue_style('diakord-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'diakord_styles');

function diakord_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'diakord'),
    ));
}

function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

add_action( 'after_setup_theme', 'register_navwalker' );

add_action('after_setup_theme', 'diakord_setup');



?>
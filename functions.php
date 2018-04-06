<?php

if (!function_exists('ce_setup')) :

    function ce_setup()
    {
        add_theme_support('title-tag');
    }

endif;

add_action('after_setup_theme', 'ce_setup');

function register_custom_menus() {
    register_nav_menus(
        array (
            'primary' => __('Header Position'),
            'footer' => __('Footer Position')
        )
    );
}

add_action('init', 'register_custom_menus');

function register_assets() {
    wp_enqueue_style('ce_style', get_stylesheet_uri());
    wp_enqueue_style('ce_font', 'https://fonts.googleapis.com/css?family=Montserrat:100,300,400');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, false);
}

add_action('wp_enqueue_scripts', 'register_assets');

add_post_type_support( 'page', 'excerpt' );

function register_session(){
    if(!session_id()) 
        session_start();
}
add_action('init','register_session');

function set_played_time() {
    $Minutes_30 = 30 * 60;
    $_SESSION['played'] = time();
    $_SESSION['expire'] = $_SESSION['played'] + $Minutes_30;
}
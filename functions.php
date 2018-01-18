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

function register_stylesheets() {
    wp_enqueue_style('ce_style', get_stylesheet_uri());
    wp_enqueue_style('ce_font', 'https://fonts.googleapis.com/css?family=Montserrate|Crimson+Text|Lato');
}

add_action('wp_enqueue_scripts', 'register_stylesheets');


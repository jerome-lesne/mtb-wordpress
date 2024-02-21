<?php

function child_enqueue_styles()
{
    wp_enqueue_style(
        'astra-child-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-theme-css'),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

function load_child_script()
{
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/assets/js/script.js');
}

add_action('wp_enqueue_scripts', 'load_child_script');

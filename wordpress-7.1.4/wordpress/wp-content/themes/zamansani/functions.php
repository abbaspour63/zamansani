<?php

function zamansani_theme_setup() {

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => 'منوی اصلی'
    ]);

}

add_action('after_setup_theme', 'zamansani_theme_setup');

function zamansani_enqueue_styles() {

    wp_enqueue_style(
        'zamansani-tailwind',
        get_theme_file_uri('/assets/css/output.css'),
        array(),
        filemtime(get_theme_file_path('/assets/css/output.css'))
    );

}

add_action('wp_enqueue_scripts', 'zamansani_enqueue_styles');
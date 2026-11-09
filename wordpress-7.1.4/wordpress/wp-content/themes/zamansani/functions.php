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


/**
 * Load Theme Styles
 */
function zamansani_enqueue_styles() {

    $css_file = get_theme_file_path('/assets/css/output.css');

    wp_enqueue_style(
        'zamansani-tailwind',
        get_theme_file_uri('/assets/css/output.css'),
        array(),
        file_exists($css_file) ? filemtime($css_file) : '1.0.0'
    );

}
add_action('wp_enqueue_scripts', 'zamansani_enqueue_styles');


/**
 * Load New Hero Three.js
 */
function zamansani_hero_new_assets() {

    if (!is_front_page()) {
        return;
    }

    wp_enqueue_script(
        'three-js',
        'https://cdnjs.cloudflare.com/ajax/libs/three.js/0.160.0/three.min.js',
        array(),
        '0.160.0',
        true
    );

  
wp_enqueue_script(
    'zamansani-hero-new',
    get_theme_file_uri('/assets/js/hero-new.js'),
    ['three-js'],
    '1.0.0',
    true
);


}
wp_enqueue_style(
    'font-awesome',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css',
    [],
    '6.7.2'
);
add_action('wp_enqueue_scripts', 'zamansani_hero_new_assets');


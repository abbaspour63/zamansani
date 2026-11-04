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

function zamansani_hero_3d_assets() {

    wp_enqueue_style(
        'zamansani-hero-3d',
        get_template_directory_uri() . '/assets/css/hero-3d.css',
        array(),
        '1.0'
    );

    wp_enqueue_script(
        'zamansani-hero-3d',
        get_template_directory_uri() . '/assets/js/hero-3d.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'zamansani_hero_3d_assets');

function zamansani_hero_3d_module($tag, $handle, $src) {

    if ($handle === 'zamansani-hero-3d') {
        return '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    return $tag;
}
add_filter('script_loader_tag', 'zamansani_hero_3d_module', 10, 3);

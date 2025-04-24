<?php
function topline_theme_setup(): void {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus([
        'main-menu' => __('القائمة الرئيسية', 'topline-theme'),
        'footer-menu' => __('قائمة الفوتر', 'topline-theme'),
    ]);
}
add_action('after_setup_theme', 'topline_theme_setup');

function topline_enqueue_styles(): void {
    wp_enqueue_style(
        'topline-style',
        get_template_directory_uri() . '/style.css',
        [],
        time() 
    );

    // Font Awesome
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        [],
        '6.5.0'
    );
}
add_action('wp_enqueue_scripts', 'topline_enqueue_styles');

require get_template_directory() . '/acf-fields.php';


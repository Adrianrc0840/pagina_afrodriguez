<?php
function afr_enqueue_assets() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css', [], null);
    wp_enqueue_style('afr-styles', get_template_directory_uri() . '/assets/css/styles.css', [], '1.0');
    wp_enqueue_script('afr-script', get_template_directory_uri() . '/assets/js/script.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'afr_enqueue_assets');

function afr_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'afr_theme_setup');

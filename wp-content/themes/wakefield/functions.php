<?php

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

function peritus_setup()
{
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        [
            'menu-1' => esc_html__('Primary', 'wakefield')
        ]
    );

    add_theme_support(
        'custom-logo',
        [
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ]
    );
}
add_action('after_setup_theme', 'peritus_setup');

function peritus_scripts()
{
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'peritus_scripts');

function vc_remove_wp_ver_css_js($src)
{
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'vc_remove_wp_ver_css_js', 9999);
add_filter('script_loader_src', 'vc_remove_wp_ver_css_js', 9999);

function peritus_assets()
{
    //$version = filemtime(get_template_directory_uri() . '/style.css');
    $version = time();
    wp_enqueue_style("wakefield-style", get_template_directory_uri() . '/style.css?v=' . $version);
    wp_enqueue_script('jquery');
    wp_enqueue_script('wakefield-scripts', get_template_directory_uri() . '/js/scripts.js?v=' . $version);
}
add_action("wp_enqueue_scripts", "peritus_assets");

// remove internal emojis from WP
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// remove Gutenberg block library CSS from front end
//remove gutenberg block library from front end
function wpassist_remove_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
    wp_dequeue_style('content-control');
    wp_dequeue_style('classic-theme-styles-inline');
}
add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');

add_filter('wpseo_metabox_prio', function () {
    return 'low';
});

//add google map api key for ACF use
function my_acf_init()
{
    acf_update_setting('google_api_key', get_field('google_maps_api_key', 'option'));
}
add_action('acf/init', 'my_acf_init');

function register_custom_image_sizes()
{
    if (!current_theme_supports('post-thumbnails')) {
        add_theme_support('post-thumbnails');
    }

    // Hero image sizes
    add_image_size('hero', 1440, 0, true);
}
add_action('after_setup_theme', 'register_custom_image_sizes');

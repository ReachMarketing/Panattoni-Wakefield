<?php

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

function wakefield_setup()
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
add_action('after_setup_theme', 'wakefield_setup');

function wakefield_scripts()
{
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'wakefield_scripts');

function vc_remove_wp_ver_css_js($src)
{
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'vc_remove_wp_ver_css_js', 9999);
add_filter('script_loader_src', 'vc_remove_wp_ver_css_js', 9999);

function wakefield_assets()
{
    //$version = filemtime(get_template_directory_uri() . '/style.css');
    $version = time();
    wp_enqueue_style("fancybox-style", get_template_directory_uri() . '/dist/fancybox/fancybox.css');
    wp_enqueue_style("wakefield-style", get_template_directory_uri() . '/style.css?v=' . $version);
    wp_enqueue_script('jquery');
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/dist/fancybox/fancybox.umd.js', array('gsap-js'), false, true);
    wp_enqueue_script('wakefield-scripts', get_template_directory_uri() . '/js/scripts.js?v=' . $version);
    wp_enqueue_script('gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js?v=' . $version, array(), false, true);
    wp_enqueue_script('gsap-js2', 'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js?v=' . $version, array('gsap-js'), false, true);
    wp_enqueue_script('gsap-js3', 'https://cdn.jsdelivr.net/npm/gsap@3.15/dist/ScrollToPlugin.min.js?v=' . $version, array('gsap-js'), false, true);
    wp_enqueue_script('gsap-js4', get_template_directory_uri() . '/js/gsap.js?v=' . $version, array('gsap-js'), false, true);
}
add_action("wp_enqueue_scripts", "wakefield_assets");

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

    add_image_size('hero-full', 2000, 800, true);
    add_image_size('hero-xl', 1440, 800, true);
    add_image_size('hero-lg', 1280, 800, true);
    add_image_size('hero-md', 1024, 650, true);
    add_image_size('hero-sm', 768, 500, true);
    add_image_size('hero-xs', 500, 400, true);

    // Full image sizes
    add_image_size('full', 2000, 0, true);
    add_image_size('xl', 1440, 0, true);
    add_image_size('lg', 1280, 0, true);
    add_image_size('md', 1024, 0, true);
    add_image_size('sm', 768, 0, true);
    add_image_size('xs', 500, 0, true);
}
add_action('after_setup_theme', 'register_custom_image_sizes');

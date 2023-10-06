<?php
/**
 * Functions and definitions for MBTMall theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package MBTMall
 */

/**
 * Enqueue scripts and styles.
 */
function mbtmall_enqueue_scripts() {
    // Enqueue styles
    wp_enqueue_style('mbtmall-style', get_stylesheet_uri());

    // Enqueue jQuery (if not already loaded).
    wp_enqueue_script('jquery');
    
    // Enqueue scripts (e.g., custom.js)
    //wp_enqueue_script('mbtmall-custom', get_template_directory_uri() . '/js/custom.js', array('jquery'), '1.0', true);
    
    // Add localized script data (e.g., passing PHP variables to JavaScript)
    // wp_localize_script('mbtmall-custom', 'mbtmall_data', array(
    //     'ajax_url' => admin_url('admin-ajax.php'),
    // ));
}
add_action('wp_enqueue_scripts', 'mbtmall_enqueue_scripts');

/**
 * Register navigation menus.
 */
function mbtmall_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mbtmall'),
        'footer' => __('Footer Menu', 'mbtmall'),
    ));
}
add_action('after_setup_theme', 'mbtmall_register_menus');

/**
 * Add theme support for features.
 */
function mbtmall_theme_support() {
    // Enable support for post thumbnails/featured images
    add_theme_support('post-thumbnails');

    // Enable support for HTML5 markup for certain elements
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    // Enable support for title tag in HTML head
    add_theme_support('title-tag');

    // Enable support for automatic feed links
    add_theme_support('automatic-feed-links');

    // Add support for WooCommerce (if needed)
    // add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mbtmall_theme_support');

/**
 * Custom template tags for this theme.
 */
// require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
// if (defined('JETPACK__VERSION')) {
//     require get_template_directory() . '/inc/jetpack.php';
// }

/**
 * Add your custom functions below this line.
 */

 /**
  * Theme Options Customizer
  */

  require_once get_template_directory() . '/inc/theme-options-customizer.php';

/**
 * Include jQuery
 */

function custom_theme_enqueue_scripts() {

}

add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');



?>

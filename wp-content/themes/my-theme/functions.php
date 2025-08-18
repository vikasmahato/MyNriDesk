<?php
/**
 * My Custom Theme functions and definitions
 */

if (!defined('_S_VERSION')) {
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function professional_advisory_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register navigation menus.
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'professional-advisory'),
    ));

    // Switch default core markup to output valid HTML5.
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for core custom logo.
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));
}
add_action('after_setup_theme', 'professional_advisory_setup');

/**
 * Enqueue scripts and styles.
 */
function professional_advisory_scripts() {
    wp_enqueue_style('professional-advisory-style', get_stylesheet_uri(), array(), _S_VERSION);
    
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
    
    // Enqueue custom animation script
    wp_enqueue_script('professional-advisory-animations', get_template_directory_uri() . '/assets/js/animations.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'professional_advisory_scripts');

/**
 * Fallback navigation menu
 */
function professional_advisory_fallback_menu() {
    echo '<ul id="primary-menu" class="menu nav-menu">';
    echo '<li class="menu-item"><a href="' . esc_url(home_url('/')) . '">Home</a></li>';
    echo '<li class="menu-item"><a href="#services">Services</a></li>';
    echo '<li class="menu-item"><a href="#digital-solutions">Digital Solutions</a></li>';
    echo '<li class="menu-item"><a href="#about">About</a></li>';
    echo '<li class="menu-item"><a href="#contact">Contact</a></li>';
    echo '</ul>';
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
} 
<?php
/**
 * Plugin Name: My Custom Plugin
 * Plugin URI: https://yoursite.com
 * Description: A custom WordPress plugin for development
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://yoursite.com
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: my-custom-plugin
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Main plugin class
 */
class MyCustomPlugin {
    
    /**
     * Constructor
     */
    public function __construct() {
        add_action('init', array($this, 'init'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
        add_action('admin_menu', array($this, 'add_admin_menu'));
    }
    
    /**
     * Initialize the plugin
     */
    public function init() {
        // Load text domain for translations
        load_plugin_textdomain('my-custom-plugin', false, dirname(plugin_basename(__FILE__)) . '/languages');
        
        // Add custom post type or other initialization code here
    }
    
    /**
     * Enqueue scripts and styles
     */
    public function enqueue_scripts() {
        // Enqueue your CSS and JS files here
        // wp_enqueue_style('my-plugin-style', plugin_dir_url(__FILE__) . 'css/style.css');
        // wp_enqueue_script('my-plugin-script', plugin_dir_url(__FILE__) . 'js/script.js', array('jquery'), '1.0.0', true);
    }
    
    /**
     * Add admin menu
     */
    public function add_admin_menu() {
        add_options_page(
            'My Custom Plugin Settings',
            'My Custom Plugin',
            'manage_options',
            'my-custom-plugin',
            array($this, 'admin_page')
        );
    }
    
    /**
     * Admin page callback
     */
    public function admin_page() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html(get_admin_page_title()) . '</h1>';
        echo '<p>Welcome to My Custom Plugin settings page!</p>';
        echo '</div>';
    }
    
    /**
     * Activation hook
     */
    public static function activate() {
        // Activation code here
        flush_rewrite_rules();
    }
    
    /**
     * Deactivation hook
     */
    public static function deactivate() {
        // Cleanup code here
        flush_rewrite_rules();
    }
}

// Initialize the plugin
new MyCustomPlugin();

// Activation and deactivation hooks
register_activation_hook(__FILE__, array('MyCustomPlugin', 'activate'));
register_deactivation_hook(__FILE__, array('MyCustomPlugin', 'deactivate')); 
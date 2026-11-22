<?php
/**
 * Plugin Name: ZamanSani-Contract-Management
 * Description: Exhibition Booth Reservation, Bale Bot and Contract Management
 * Version: 1.0.0
 * Author: ZamanSani
 * Text Domain: zamansani
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ZS_VERSION', '1.0.0');
define('ZS_PATH', plugin_dir_path(__FILE__));
define('ZS_URL', plugin_dir_url(__FILE__));

// Load plugin classes.
require_once ZS_PATH . 'includes/class-activator.php';
require_once ZS_PATH . 'includes/class-database.php';


// Plugin activation.
register_activation_hook(
    __FILE__,
    ['ZS_Activator', 'activate']
);

// Initialize plugin.
add_action('plugins_loaded', function () {
    // Plugin initialization will be added here.
});
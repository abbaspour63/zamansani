<?php

/**
 * Plugin Name: ZamanSani Admission
 * Description: Admission and showroom management system for ZamanSani.
 * Version: 1.0.0
 * Author: ZamanSani
 * Text Domain: zamansani-admission
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ZS_ADMISSION_VERSION', '1.0.0');

define(
    'ZS_ADMISSION_PATH',
    plugin_dir_path(__FILE__)
);

define(
    'ZS_ADMISSION_URL',
    plugin_dir_url(__FILE__)
);

$autoload = ZS_ADMISSION_PATH . 'vendor/autoload.php';

if (file_exists($autoload)) {
    require_once $autoload;
    add_action('plugins_loaded', function () {

        $plugin = new \ZamanSani\Admission\Core\Bootstrap\Plugin();

        $plugin->run();
    });
}

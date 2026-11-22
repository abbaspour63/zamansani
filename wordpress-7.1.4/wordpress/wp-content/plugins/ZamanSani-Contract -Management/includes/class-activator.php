-- Active: 1788434810387@@127.0.0.1@3307

<?php

if (!defined('ABSPATH')) {
    exit;
}

class ZS_Activator
{
    public static function activate()
    {
        ZS_Database::create_tables();

        // Mark plugin as installed.
        update_option('zs_plugin_version', ZS_VERSION);
    }
}


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

bb<?php

if (!defined('ABSPATH')) {
    exit;
}

class ZS_Database
{
    public static function create_tables()
    {
        global $wpdb;
        
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $charset_collate = $wpdb->get_charset_collate();
        
        $tables = [];

        // Exhibitions.
        $tables[] = "CREATE TABLE {$wpdb->prefix}zs_exhibitions (
            id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            title varchar(190) NOT NULL,
            location varchar(255) DEFAULT '',
            starts_on date DEFAULT NULL,
            ends_on date DEFAULT NULL,
            status varchar(20) NOT NULL DEFAULT 'draft',
            created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            KEY status (status)
        ) $charset_collate;";

        // Halls.
        $tables[] = "CREATE TABLE {$wpdb->prefix}zs_halls (
            id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            exhibition_id bigint(20) unsigned NOT NULL,
            name varchar(190) NOT NULL,
            sort_order int(11) NOT NULL DEFAULT 0,
            PRIMARY KEY  (id),
            KEY exhibition_id (exhibition_id)
        ) $charset_collate;";

        // Booths.
        $tables[] = "CREATE TABLE {$wpdb->prefix}zs_booths (
            id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            hall_id bigint(20) unsigned NOT NULL,
            booth_code varchar(50) NOT NULL,
            price decimal(12,2) NOT NULL DEFAULT 0.00,
            status varchar(20) NOT NULL DEFAULT 'available',
            x_position decimal(8,5) DEFAULT NULL,
            y_position decimal(8,5) DEFAULT NULL,
            width decimal(8,5) DEFAULT NULL,
            height decimal(8,5) DEFAULT NULL,
            PRIMARY KEY  (id),
            UNIQUE KEY hall_booth (hall_id, booth_code),
            KEY status (status)
        ) $charset_collate;";

        // Customers.
        $tables[] = "CREATE TABLE {$wpdb->prefix}zs_customers (
            id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            full_name varchar(190) NOT NULL,
            company_name varchar(190) DEFAULT '',
            mobile varchar(30) DEFAULT '',
            national_id varchar(50) DEFAULT '',
            bale_user_id varchar(100) DEFAULT NULL,
            created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            KEY mobile (mobile)
        ) $charset_collate;";

        // Reservations.
        $tables[] = "CREATE TABLE {$wpdb->prefix}zs_reservations (
            id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            booth_id bigint(20) unsigned NOT NULL,
            customer_id bigint(20) unsigned NOT NULL,
            status varchar(20) NOT NULL DEFAULT 'pending',
            total_amount decimal(12,2) NOT NULL DEFAULT 0.00,
            expires_at datetime DEFAULT NULL,
            created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            KEY booth_id (booth_id),
            KEY customer_id (customer_id),
            KEY status (status)
        ) $charset_collate;";

        // Payments.
        $tables[] = "CREATE TABLE {$wpdb->prefix}zs_payments (
            id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            reservation_id bigint(20) unsigned NOT NULL,
            provider varchar(50) NOT NULL DEFAULT '',
            transaction_id varchar(190) DEFAULT NULL,
            amount decimal(12,2) NOT NULL DEFAULT 0.00,
            status varchar(20) NOT NULL DEFAULT 'pending',
            verified_at datetime DEFAULT NULL,
            created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            UNIQUE KEY transaction_id (transaction_id),
            KEY reservation_id (reservation_id)
        ) $charset_collate;";

        // Contracts.
        $tables[] = "CREATE TABLE {$wpdb->prefix}zs_contracts (
            id bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            reservation_id bigint(20) unsigned NOT NULL,
            file_path text DEFAULT NULL,
            status varchar(20) NOT NULL DEFAULT 'draft',
            customer_signed_at datetime DEFAULT NULL,
            company_signed_at datetime DEFAULT NULL,
            created_at datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            KEY reservation_id (reservation_id),
            KEY status (status)
        ) $charset_collate;";

        foreach ($tables as $sql) {
            dbDelta($sql);
        }

        update_option('zs_db_version', ZS_DB_VERSION);
    }
}

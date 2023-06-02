<?php
class CreateTables
{
    public function register()
    {
        $this->create_products_table();
    }

    public function create_products_table()
    {
        global $wpdb;
        $table_name = $wpdb->prefix . 'products';

        $sql = "CREATE TABLE $table_name (
            p_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            p_name TEXT NOT NULL,
            p_category TEXT NOT NULL,
            p_description TEXT NOT NULL,
            p_price INT NOT NULL
        )";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}

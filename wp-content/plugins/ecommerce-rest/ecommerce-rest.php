<?php

/**
 * Plugin Name: Ecommerce Rest API
 * Plugin URI: http://example.com
 * Author: Brian 
 * Description: This is a plugin for ecommerce rest routes
 * Version: 1.0.0
 * License: GPLv2 or later
 * 
 */

defined('ABSPATH') or die('Stopped');

require_once(dirname(__FILE__) . '/create-tables.php');
require_once(dirname(__FILE__) . '/product-routes.php');

class EcommerceRest
{
    public function activate_plugin()
    {
        $tables = new CreateTables();
        $tables->register();
    }
}

$rest_instance = new EcommerceRest();

register_activation_hook(__FILE__, [$rest_instance, 'activate_plugin']);

add_action('rest_api_init', 'register_routes');
function register_routes()
{
    $product_routes = new ProductRoutes();
    $product_routes->register();
}

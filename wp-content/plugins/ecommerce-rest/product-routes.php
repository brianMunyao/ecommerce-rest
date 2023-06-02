<?php

class ProductRoutes
{

    public function register()
    {
        register_rest_route('api/v1', '/products', [
            'methods' => 'GET',
            'callback' => [$this, 'get_products'],
            'permission_callback' => function () {
                return current_user_can('read');
            }
        ]);

        register_rest_route('api/v1', '/products', [
            'methods' => 'POST',
            'callback' => [$this, 'create_product'],
            'permission_callback' => function () {
                return current_user_can('manage_options');
            }
        ]);

        register_rest_route('api/v1', '/products/(?P<id>\d+)', [
            'methods' => 'PUT',
            'callback' => [$this, 'update_product'],
            'permission_callback' => function () {
                return current_user_can('manage_options');
            }
        ]);
        register_rest_route('api/v1', '/products/(?P<id>\d+)', [
            'methods' => 'DELETE',
            'callback' => [$this, 'delete_product'],
            'permission_callback' => function () {
                return current_user_can('manage_options');
            }
        ]);
    }


    public function get_products($request)
    {
        global $wpdb;
        $products_table = $wpdb->prefix . 'products';
        $products = $wpdb->get_results("SELECT * FROM $products_table");
        return $products;
    }

    public function create_product($request)
    {
        global $wpdb;
        $products_table = $wpdb->prefix . 'products';

        $res = $wpdb->insert($products_table, [
            'p_name' => $request['p_name'],
            'p_category' => $request['p_category'],
            'p_description' => $request['p_description'],
            'p_price' => $request['p_price']
        ]);

        if ($res > 0) {
            return "Product Added Successfully";
        }
        return new WP_Error(404, "Error creating product");
    }

    public function update_product($request)
    {
        $id = $request->get_param('id');

        global $wpdb;
        $products_table = $wpdb->prefix . 'products';

        $res = $wpdb->update($products_table, [
            'p_name' => $request['p_name'],
            'p_category' => $request['p_category'],
            'p_description' => $request['p_description'],
            'p_price' => $request['p_price']
        ], ['p_id' => $id]);

        if ($res > 0) {
            return "Product Updated Successfully";
        }
        return new WP_Error(404, "Error updating the product");
    }


    public function delete_product($request)
    {
        $id = $request->get_param('id');

        global $wpdb;
        $products_table = $wpdb->prefix . 'products';

        $res = $wpdb->delete($products_table, ['p_id' => $id]);

        if ($res > 0) {
            return "Product Deleted Successfully";
        }
        return new WP_Error(404, "Error deleting the product");
    }
}

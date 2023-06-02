<?php

class ProductRoutes
{
    public function register()
    {
        register_rest_route('api/v1', '/products', array(
            'methods' => 'GET',
            'callback' => array($this, 'get_products'),
            'permission_callback' => function () {
                return current_user_can('read');
            }
        ));
    }


    public function get_products($request)
    {
    }
}

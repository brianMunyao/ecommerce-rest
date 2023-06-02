<?php get_header() ?>

<?php

$token_res = wp_remote_post('http://localhost/ecommerce-rest/wp-json/jwt-auth/v1/token', [
    'body' => [
        'username' => 'admin',
        'password' => 'admin'
    ]
]);

$token = json_decode($token_res['body'])->token;


$res = wp_remote_get('http://localhost/ecommerce-rest/wp-json/api/v1/products', [
    'method' => 'GET',
    'headers' => ['Authorization' => 'Bearer ' . $token]
]);
$res = wp_remote_retrieve_body($res);;

$products = json_decode($res);
?>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Category</th>
        <th>Description</th>
        <th>Price</th>
    </tr>

    <?php
    if (count($products) == 0) {
    ?>
        <tr>
            <td class="empty" colspan="5">No products available</td>
        </tr>
    <?php
    }
    ?>


    <?php
    $i = 0;
    foreach ($products as $product) {

    ?>
        <tr>
            <td><?php echo ++$i ?></td>
            <td><?php echo $product->p_name ?></td>
            <td><?php echo $product->p_category ?></td>
            <td><?php echo $product->p_description ?></td>
            <td><?php echo $product->p_price ?></td>
        </tr>
    <?php
    }
    ?>

</table>

<?php get_footer(); ?>
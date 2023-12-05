<?php
add_action('wp_ajax_single_add_to_cart', 'single_add_to_cart');
add_action('wp_ajax_nopriv_single_add_to_cart', 'single_add_to_cart');

function single_add_to_cart()
{
    $quantity = $_POST['quantity'];
    $product = $_POST['product'];
    $added = WC()->cart->add_to_cart($product, $quantity);
    $redirect = site_url() . '/cart';
    $response = '';
    if ($added) {
        $response = [
            "data" => true,
            "url" => $redirect
        ];
    } else {
        $response = '';
    }
    echo json_encode($response);
    die();
}
// add to cart 
add_action('wp_ajax_add_to_cart', 'add_to_cart');
add_action('wp_ajax_nopriv_add_to_cart', 'add_to_cart');

function add_to_cart()
{
    $product = $_POST['product'];
    $added = WC()->cart->add_to_cart($product);
    $redirect = site_url() . '/cart';
    $response = '';
    if ($added) {
        $total =  WC()->cart->get_cart_contents_count(); 
        $response = [
            "data" => true,
            "url" => $redirect,
            "cart_count" => $total
        ];
    } else {
        $response = '';
    }
    echo json_encode($response);
    die();
}

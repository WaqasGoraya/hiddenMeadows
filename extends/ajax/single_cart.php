<?php
add_action('wp_ajax_single_add_to_cart', 'single_add_to_cart');
add_action('wp_ajax_nopriv_single_add_to_cart', 'single_add_to_cart');

function single_add_to_cart()
{
    $quantity = $_POST['quantity'];
    $product = $_POST['product'];
    $added = WC()->cart->add_to_cart($product, $quantity);
    echo $added;
    die();
}

// function single_add_to_cart()
// {
//     $product_id = apply_filters('single_add_to_cart_product_id', absint($_POST['product_id']));
//     $quantity = empty($_POST['quantity']) ? 1 : wc_stock_amount($_POST['quantity']);
//     $passed_validation = apply_filters('single_add_to_cart_validation', true, $product_id, $quantity);
//     $product_status = get_post_status($product_id);
//     if ($passed_validation && WC()->cart->add_to_cart($product_id, $quantity) && 'publish' === $product_status) {
//         do_action('single_add_to_cart_added_to_cart', $product_id);
//         if ('yes' === get_option('single_add_to_cart_redirect_after_add')) {
//             wc_add_to_cart_message(array($product_id => $quantity), true);
//         }
//         WC_AJAX::get_refreshed_fragments();
//     } else {
//         $data = array(
//             'error' => true,
//             'product_url' => apply_filters('single_add_to_cart_redirect_after_error', get_permalink($product_id), $product_id)
//         );
//         echo wp_send_json($data);
//     }
//     wp_die();
// }

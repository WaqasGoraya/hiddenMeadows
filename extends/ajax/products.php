<?php


add_action('wp_ajax_load_more_products', 'load_more_products');
add_action('wp_ajax_nopriv_load_more_products', 'load_more_products');

add_action('wp_ajax_load_more_redwine', 'load_more_redwine');
add_action('wp_ajax_nopriv_load_more_redwine', 'load_more_redwine');

add_action('wp_ajax_load_more_rosewine', 'load_more_rosewine');
add_action('wp_ajax_nopriv_load_more_rosewine', 'load_more_rosewine');

add_action('wp_ajax_load_more_whitewine', 'load_more_whitewine');
add_action('wp_ajax_nopriv_load_more_whitewine', 'load_more_whitewine');

add_action('wp_ajax_load_more_sprwine', 'load_more_sprwine');
add_action('wp_ajax_nopriv_load_more_sprwine', 'load_more_sprwine');

add_action('wp_ajax_search_products', 'search_products');
add_action('wp_ajax_nopriv_search_products', 'search_products');



function load_more_products()
{
    $offset = $_POST["offset"];
    $products_args = array(
        'posts_per_page' => 4,
        'post_type' => 'product',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        'offset' => $offset

    );

    $products_query = new WP_Query($products_args);
    $response = '';

    $count = wp_count_posts($post_type = 'product');


    if ($products_query->have_posts()) {


        ob_start();

        foreach ($products_query->posts as $key => $product) {

            $product_img = wp_get_attachment_url(get_post_thumbnail_id($product->ID));

            $product_meta = get_post_meta($product->ID);

            $response .=
            ' <div class="col-md-4 col-lg-3">
                            <div class="card">
                                <div class="img-box" data-id="' . $product->ID . '">';

            if (is_user_logged_in()) :
                $response .= '<a class="btn btn-cart" id="cart_one">
                    <img src="' . get_template_directory_uri() .
                    '/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            else :
                $response .=       '<a href="' . site_url() . '/login" class="btn btn-cart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            endif;

            $response .=  '<img src="' . $product_img . '" alt="product" class="card-img-top">
                                </div>
                                <a href="' . get_permalink($product->ID) . '">
                                    <div class="card-body text-center">
                                        <h3 class="card-title">' . $product->post_title . '</h3>';
            if (isset($product_meta['producer_id'])) {
                $response .=  '<p class="card-text">' . $product_meta['producer_id'][0] . '</p>';
            } else {
                $response .= '<p class="card-text">Nuvole</p>';
            }

            $response .=  '</div>
                        </a>
                    </div>
                </div>';
            ob_end_clean();
        }
    } else {
        $response = '';
    }
    // return $response;

    $result = [
        'max' => $count->publish,
        'html' => $response,
    ];

    echo json_encode($result);
    wp_die();
}

function load_more_redwine()
{


    $offset = $_POST["offset"];
    $redwine_args = array(
        'posts_per_page' => 4,
        'post_type' => 'product',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'red-wine',
                'operator' => 'IN',
            )
        ),
        'offset' => $offset

    );



    $redwine_query = new WP_Query($redwine_args);

    $response = '';

    if ($redwine_query->have_posts()) {

        ob_start();

        foreach ($redwine_query->posts as $key => $redwine) {

            $redwine_img = wp_get_attachment_url(get_post_thumbnail_id($redwine->ID));

            $redwine_meta = get_post_meta($redwine->ID);

            $response .=
            ' <div class="col-md-4 col-lg-3">
                            <div class="card">
                               <div class="img-box" data-id="' . $redwine->ID . '">';

            if (is_user_logged_in()) :
                $response .= '<a class="btn btn-cart" id="cart_one">
                    <img src="' . get_template_directory_uri() .
                    '/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            else :
                $response .=       '<a href="' . site_url() . '/login" class="btn btn-cart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            endif;

            $response .=  '<img src="' . $redwine_img . '" alt="redwine" class="card-img-top">
                                </div>
                                <a href="' . get_permalink($redwine->ID) . '">
                                    <div class="card-body text-center">
                                        <h3 class="card-title">' . $redwine->post_title . '</h3>';
            if (isset($redwine_meta['producer_id'])) {
                $response .=  '<p class="card-text">' . $redwine_meta['producer_id'][0] . '</p>';
            } else {
                $response .= '<p class="card-text">Nuvole</p>';
            }

            $response .=  '</div>
                        </a>
                    </div>
                </div>';
            ob_end_clean();
        }
    } else {
        $response = '';
    }

    $result = [
        'max' => $redwine_query->found_posts,
        'html' => $response,
    ];

    echo json_encode($result);

    wp_die();
}

// rose wine

function load_more_rosewine()
{


    $offset = $_POST["offset"];
    $rosewine_args = array(
        'posts_per_page' => 4,
        'post_type' => 'product',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'rose-wine',
                'operator' => 'IN',
            )
        ),
        'offset' => $offset

    );



    $rosewine_query = new WP_Query($rosewine_args);

    $response = '';


    if ($rosewine_query->have_posts()) {

        ob_start();

        foreach ($rosewine_query->posts as $key => $rosewine) {

            $rosewine_img = wp_get_attachment_url(get_post_thumbnail_id($rosewine->ID));

            $rosewine_meta = get_post_meta($rosewine->ID);

            $response .=
            '<div class="col-md-4 col-lg-3">
                            <div class="card">
                               <div class="img-box" data-id="' . $rosewine->ID . '">';

            if (is_user_logged_in()) :
                $response .= '<a class="btn btn-cart" id="cart_one">
                    <img src="' . get_template_directory_uri() .
                    '/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            else :
                $response .=       '<a href="' . site_url() . '/login" class="btn btn-cart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            endif;

            $response .=  '<img src="' . $rosewine_img . '" alt="rosewine" class="card-img-top">
                                </div>
                                <a href="' . get_permalink($rosewine->ID) . '">
                                    <div class="card-body text-center">
                                        <h3 class="card-title">' . $rosewine->post_title . '</h3>';
            if (isset($rosewine_meta['producer_id'])) {
                $response .=  '<p class="card-text">' . $rosewine_meta['producer_id'][0] . '</p>';
            } else {
                $response .= '<p class="card-text">Nuvole</p>';
            }

            $response .=  '</div>
                        </a>
                    </div>
                </div>';
            ob_end_clean();
        }
    } else {
        $response = '';
    }

    $result = [
        'max' => $rosewine_query->found_posts,
        'html' => $response,
    ];

    echo json_encode($result);

    wp_die();
}


function load_more_whitewine()
{


    $offset = $_POST["offset"];
    $whitewine_args = array(
        'posts_per_page' => 4,
        'post_type' => 'product',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'white-wine',
                'operator' => 'IN',
            )
        ),
        'offset' => $offset

    );



    $whitewine_query = new WP_Query($whitewine_args);

    $response = '';


    if ($whitewine_query->have_posts()) {

        ob_start();

        foreach ($whitewine_query->posts as $key => $whitewine) {

            $whitewine_img = wp_get_attachment_url(get_post_thumbnail_id($whitewine->ID));

            $whitewine_meta = get_post_meta($whitewine->ID);

            $response .=
            '<div class="col-md-4 col-lg-3">
                            <div class="card">
                              <div class="img-box" data-id="' . $whitewine->ID . '">';

            if (is_user_logged_in()) :
                $response .= '<a class="btn btn-cart" id="cart_one">
                    <img src="' . get_template_directory_uri() .
                    '/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            else :
                $response .=       '<a href="' . site_url() . '/login" class="btn btn-cart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            endif;

            $response .=  '<img src="' . $whitewine_img . '" alt="whitewine" class="card-img-top">
                                </div>
                                <a href="' . get_permalink($whitewine->ID) . '">
                                    <div class="card-body text-center">
                                        <h3 class="card-title">' . $whitewine->post_title . '</h3>';
            if (isset($whitewine_meta['producer_id'])) {
                $response .=  '<p class="card-text">' . $whitewine_meta['producer_id'][0] . '</p>';
            } else {
                $response .= '<p class="card-text">Nuvole</p>';
            }

            $response .=  '</div>
                        </a>
                    </div>
                </div>';
            ob_end_clean();
        }
    } else {
        $response = '';
    }

    $result = [
        'max' => $whitewine_query->found_posts,
        'html' => $response,
    ];

    echo json_encode($result);

    wp_die();
}

function load_more_sprwine()
{


    $offset = $_POST["offset"];
    $sprwine_args = array(
        'posts_per_page' => 4,
        'post_type' => 'product',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'slug',
                'terms' => 'sparkling-wine',
                'operator' => 'IN',
            )
        ),
        'offset' => $offset

    );



    $sprwine_query = new WP_Query($sprwine_args);

    $response = '';


    if ($sprwine_query->have_posts()) {

        ob_start();

        foreach ($sprwine_query->posts as $key => $sprwine) {

            $sprwine_img = wp_get_attachment_url(get_post_thumbnail_id($sprwine->ID));

            $sprwine_meta = get_post_meta($sprwine->ID);

            $response .=
            '<div class="col-md-4 col-lg-3">
                            <div class="card">
                                 <div class="img-box" data-id="' . $sprwine->ID . '">';

            if (is_user_logged_in()) :
                $response .= '<a class="btn btn-cart" id="cart_one">
                    <img src="' . get_template_directory_uri() .
                    '/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            else :
                $response .=       '<a href="' . site_url() . '/login" class="btn btn-cart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            endif;

            $response .= '<img src="' . $sprwine_img . '" alt="sprwine" class="card-img-top">
                                </div>
                                <a href="' . get_permalink($sprwine->ID) . '">
                                    <div class="card-body text-center">
                                        <h3 class="card-title">' . $sprwine->post_title . '</h3>';
            if (isset($sprwine_meta['producer_id'])) {
                $response .=  '<p class="card-text">' . $sprwine_meta['producer_id'][0] . '</p>';
            } else {
                $response .= '<p class="card-text">Nuvole</p>';
            }

            $response .=  '</div>
                        </a>
                    </div>
                </div>';
            ob_end_clean();
        }
    } else {
        $response = '';
    }

    $result = [
        'max' => $sprwine_query->found_posts,
        'html' => $response,
    ];

    echo json_encode($result);

    wp_die();
}


function search_products()
{

    $offset = $_POST["offset"];
    $search = $_POST["search"];
    $cat = $_POST["cat"];

    if ($cat == "red") {
        $Arr =  array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'sparkling-wine',
            'operator' => 'IN',
        );
    }
    if ($cat == "rose") {
        $Arr = array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'rose-wine',
            'operator' => 'IN',
        );
    }
    if ($cat == "white") {
        $Arr =  array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'white-wine',
            'operator' => 'IN',
        );
    }
    if ($cat == "sparkling") {
        $Arr =  array(
            'taxonomy' => 'product_cat',
            'field' => 'slug',
            'terms' => 'sparkling-wine',
            'operator' => 'IN',
        );
    }

    $products_args = array(
        'posts_per_page' => 4,
        'post_type' => 'product',
        'post_status' => 'publish',
        'orderby' => 'title',
        'order' => 'ASC',
        's', 'like', $search,
        'offset' => $offset,
        'tax_query' =>  array(
            'relation' => 'OR',
            $Arr
        ),
    );


    $products_query = new WP_Query($products_args);
    $response = '';

    $count = wp_count_posts($post_type = 'product');

    if ($products_query->have_posts()) {

        ob_start();

        foreach ($products_query->posts as $key => $product) {

            $product_img = wp_get_attachment_url(get_post_thumbnail_id($product->ID));

            $product_meta = get_post_meta($product->ID);

            $response .=
                ' <div class="col-md-4 col-lg-3">
                            <div class="card">
                                <div class="img-box" data-id="' . $product->ID . '">';

            if (is_user_logged_in()) :
                $response .= '<a class="btn btn-cart" id="cart_one">
                    <img src="' . get_template_directory_uri() .
                    '/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            else :
                $response .=       '<a href="' . site_url() . '/login" class="btn btn-cart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                    Add to Cart
                </a>';
            endif;

            $response .=  '<img src="' . $product_img . '" alt="product" class="card-img-top">
                                </div>
                                <a href="' . get_permalink($product->ID) . '">
                                    <div class="card-body text-center">
                                        <h3 class="card-title">' . $product->post_title . '</h3>';
            if (isset($product_meta['producer_id'])) {
                $response .=  '<p class="card-text">' . $product_meta['producer_id'][0] . '</p>';
            } else {
                $response .= '<p class="card-text">Nuvole</p>';
            }

            $response .=  '</div>
                        </a>
                    </div>
                </div>';
            ob_end_clean();
        }
    } else {
        $response = '';
    }
    // return $response;

    $result = [
        'max' => $count->publish,
        'html' => $response,
        'cat' => $cat
    ];

    echo json_encode($result);
    wp_die();
}

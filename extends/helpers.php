<?php
function cart_login_check()
{ ?>
    <a class="btn btn-cart" id="cart_one">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
        Add to Cart
    </a>
<?php
}


function post_data($category)
{
    $args = array(

        'post_type' => 'sitesettings',

        'post_status' => 'publish',

        'posts_per_page' => -1,

        'orderby' => 'date',

        'order' => 'ASC',
        'category' => '',
        'category_name' => $category,

    );

    $query = new WP_Query($args);
    $img = wp_get_attachment_url(get_post_thumbnail_id($query->posts[0]->ID));
    $excrept = $query->posts[0]->post_excerpt;

    return [
        'img' => $img,
        'excrept' => $excrept
    ];
}
?>
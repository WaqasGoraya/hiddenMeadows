<?php
function cart_login_check()
{
    if (is_user_logged_in()) : ?>
        <a class="btn btn-cart" id="cart_one">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
            Add to Cart
        </a>
    <?php else : ?>
        <a href="<?= site_url(); ?>/login" class="btn btn-cart">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
            Add to Cart
        </a>
<?php endif;
}
?>
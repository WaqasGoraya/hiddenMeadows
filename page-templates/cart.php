<?php
// Template Name: cart
get_header();
?>
<!-------------------------------- Cart Start ------------------------------------>
<!-- <section class="section-cart">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <h2 class="cart-title"><span class="fw-bold">Your Cart</span> (3 item)</h2>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-md-7 col-lg-8">
                <div class="d-lg-none">
                    <?php foreach (WC()->cart->get_cart() as $cart_item) : ?>
                        <div class="responsive-product">
                            <div class="d-flex align-items-center justify-content-between gap-3 p-2">
                                <h2 class="res-title">Image</h2>
                                <img src="<?= get_template_directory_uri(); ?>/assets/images/product-5.png" alt="product" class="img-res">
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-3 p-2">
                                <h2 class="res-title">Name</h2>
                                <p class="res-text">2017 Cavalchina Bardolino Chiaretto</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-3 p-2">
                                <h2 class="res-title">Price</h2>
                                <p class="res-number">&dollar;89.00</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-3 p-2">
                                <h2 class="res-title">Quantity</h2>
                                <p class="res-number">1</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between gap-3 p-2">
                                <h2 class="res-title">Total</h2>
                                <p class="res-number">&dollar;89.00</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-end p-2">
                                <a href="#">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/icon_trash.png" alt="trash" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="table-responsive d-none d-lg-block">
                    <table class="table table-borderless">
                        <thead class="table-head">
                            <tr>
                                <th>Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            <?php foreach (WC()->cart->get_cart() as $cart_item) :
                                $product = $cart_item['data'];
                                $product_id = $cart_item['product_id'];
                                $price = WC()->cart->get_product_price($product);
                                $subtotal = WC()->cart->get_product_subtotal($product, $cart_item['quantity']);
                                $image = get_the_post_thumbnail_url($cart_item['product_id']);
                                // echo "<pre>";
                                // print_r($price);
                                // exit;
                            ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-4">
                                            <div class="product-box">
                                                <img src="<?= $image; ?>" alt="product">
                                            </div>
                                            <div class="product-name"><?= $product->get_title(); ?></div>
                                        </div>
                                    </td>
                                    <td><?= $price; ?></td>
                                    <td><?= $cart_item['quantity']; ?></td>
                                    <td><?= $subtotal; ?></td>
                                    <td>
                                        <a id="cart_remove" style="cursor: pointer;">
                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/icon_trash.png" alt="trash" class="img-trash">
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">
                                    <div class="d-flex align-items-center justify-content-end gap-4">
                                        <span class="subtotal">Sub Total</span>
                                        <span class="subtotal">&dollar;124.00</span>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Total Cart</h3>
                        <div class="d-flex align-items-center justify-content-between mb-2 mb-md-4">
                            <span class="sub">subtotal</span>
                            <span class="price">&dollar;124.00</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2 mb-md-4">
                            <span class="sub">shipping</span>
                            <span class="price">&dollar;50.00</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between border-total">
                            <span class="sub">total</span>
                            <span class="price">&dollar;174.00</span>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary">Proceed to Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="section-cart">
    <div class="container">
        <?= do_shortcode('[woocommerce_cart]'); ?>
    </div>
</section>
<!-------------------------------- Cart End ------------------------------------>
<?php get_footer(); ?>
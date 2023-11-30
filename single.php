<?php
get_header();

?>
<?php if (is_product()) :
    global $post;

    $id = $post->ID;

    $product_data = wc_get_product($id);

    $product_meta = get_post_meta($id);

    $category = get_the_terms($post->ID, 'product_cat');

    $related = get_posts(array(

        'post_type' => 'product',

        'post_status' => 'publish',

        'fields' => 'ids',

        'posts_per_page' => 4,

        'exclude' => array($id),

    ));
?>
    <!-------------------------------- Product Detail Start ------------------------------------>
    <section class="section-product-detail">
        <div class="container">
            <div class="row section-shadow gy-4 p-4">
                <div class="col-lg-10">
                    <div class="row gy-4">
                        <div class="col-md-4 text-center text-lg-start">
                            <img src="<?= get_the_post_thumbnail_url($post->ID) ?>" alt="product" class="img-product">
                        </div>
                        <div class="col-md-8">
                            <h2 class="product-name"><?= $post->post_title; ?></h2>
                            <?php if (is_user_logged_in()) : ?>
                                <p class="product-price">Price : $ <?= $product_data->get_price(); ?></p>
                            <?php else : ?>
                                <p class="product-price">Login to see $-price</p>
                            <?php endif; ?>

                            <div class="d-flex align-items-center flex-column flex-md-row my-4 gap-3">
                                <div class="counter" data-id="<?= $id; ?>">
                                    <button class="qty qtybtn dec">
                                        <span>-</span>
                                    </button>
                                    <span class="number qty_total">0</span>
                                    <button class="qty qtybtn inc">
                                        <span>+</span>
                                    </button>
                                </div>
                                <button class="btn btn-cart" id="single_cart">Add to Cart</button>
                            </div>
                            <h3 class="desc-text">Description:</h3>
                            <div class="d-flex flex-wrap align-items-center gap-1 mb-2">
                                <h4 class="desc-heading">Appellation:</h4>
                                <?php if (isset($product_meta['appellation_id'])) : ?>
                                    <p class="desc-detail"><?= $product_meta['appellation_id'][0]; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-2">
                                <h4 class="desc-heading">Region:</h4>
                                <?php if (isset($product_meta['region_id'])) : ?>
                                    <p class="desc-detail"><?= $product_meta['region_id'][0]; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-2">
                                <h4 class="desc-heading">Zone:</h4>
                                <?php if (isset($product_meta['zone_id'])) : ?>
                                    <p class="desc-detail"><?= $product_meta['zone_id'][0]; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-2">
                                <h4 class="desc-heading">Varietals:</h4>
                                <?php if (isset($product_meta['varietals_id'])) : ?>
                                    <p class="desc-detail"><?= $product_meta['varietals_id'][0]; ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex flex-wrap align-items-center gap-3 mb-4">
                                <h4 class="desc-heading">Wine Type:</h4>
                                <?php if (isset($category)) :
                                    foreach ($category as $cat) :
                                ?>
                                        <p class="desc-detail"><?= $cat->name; ?></p>
                                <?php endforeach;
                                endif; ?>
                            </div>
                            <div class="d-flex flex-wrap justify-content-center justify-content-md-start align-items-center gap-3 mb-4">
                                <?php if (isset($product_meta['producer_link_id'])) : ?>
                                    <a href="<?= $product_meta['producer_link_id'][0]; ?>" class="btn btn-goto">
                                        <span class="me-2">Go to Producer</span>
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/right_arrow.png" alt="arrow" class="img-fluid">
                                    </a>
                                <?php else : ?>
                                    <a href="#" class="btn btn-goto">
                                        <span class="me-2">Go to Producer</span>
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/right_arrow.png" alt="arrow" class="img-fluid">
                                    </a>
                                <?php endif; ?>
                                <?php if (isset($product_meta['producer_link_id'])) : ?>
                                    <a href="<?= $product_meta['producer_link_id'][0] ?>" class="btn btn-download">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/down_arrow.png" alt="arrow" class="img-fluid">
                                        <span class="ps-2 text-underline">Download Technical Sheet</span>
                                    </a>
                                <?php else : ?>
                                    <a href="#" class="btn btn-download">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/down_arrow.png" alt="arrow" class="img-fluid">
                                        <span class="ps-2 text-underline">Download Technical Sheet</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 text-center text-lg-end">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/map_2.png" alt="map" class="img-map">
                </div>
            </div>
        </div>
                <div class="loader">
            <?xml version="1.0" encoding="utf-8"?>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin: auto; background: transparent; display: block; shape-rendering: auto;" width="144px" height="144px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <circle cx="50" cy="50" r="28" stroke-width="7" stroke="#912623" stroke-dasharray="43.982297150257104 43.982297150257104" fill="none" stroke-linecap="round">
            <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1.4492753623188404s" keyTimes="0;1" values="0 50 50;360 50 50"></animateTransform>
            </circle>
            <!-- [ldio] generated by https://loading.io/ --></svg>
        </div>
    </section>
    <!-------------------------------- Product Detail End ------------------------------------>

    <!-------------------------------- Recent Products Start ------------------------------------>
    <?php if (!empty($related)) : ?>
        <section class="section-products pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="recent-product-title">recently viewed products</h2>
                    </div>
                </div>
                <div class="row gy-4">
                    <?php foreach ($related as $key => $row) :

                        $product = wc_get_product($row);

                        $attachmentIds = wp_get_attachment_url(get_post_thumbnail_id($product->get_id()));

                        $product_link =  get_permalink($product->get_id());

                        $product_meta = get_post_meta($product->get_id());


                    ?>
                        <div class="col-md-4 col-lg-3">
                            <div class="card">
                                <div class="img-box">
                                    <a href="#" class="btn btn-cart">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                                        Add to Cart
                                    </a>
                                    <img src="<?= $attachmentIds; ?>" alt="product" class="card-img-top">
                                </div>
                                <a href="<?= $product_link; ?>">
                                    <div class="card-body text-center">
                                        <h3 class="card-title"><?= $product->get_title(); ?></h3>
                                        <?php if (isset($product_meta['producer_id'])) : ?>
                                            <p class="card-text"><?= $product_meta['producer_id'][0]; ?></p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="row">
                    <div class="col text-center mt-5">
                        <a href="<?= site_url(); ?>/products" class="btn btn-view">view more</a>
                    </div>
                </div>
            </div>
        </section>
        <!-------------------------------- Recent Products End ------------------------------------>
    <?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>
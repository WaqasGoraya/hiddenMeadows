<?php

// Template Name: Products

get_header();
//All wines
$params = array(
    'posts_per_page' => 8,
    'post_type' => 'product',
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC',
);
$products = new WP_Query($params);
$p_count = wp_count_posts($post_type = 'product');
//Red Wine
$redparams = array(
    'posts_per_page' => 8,
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
);
$redwine = new WP_Query($redparams);

//Rose Wine 
$roseparams = array(
    'posts_per_page' => 8,
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
);
$rosewine = new WP_Query($roseparams);

//White Wine 
$whiteparams = array(
    'posts_per_page' => 8,
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
);
$whitewine = new WP_Query($whiteparams);

//Sparkling Wine 
$sprparams = array(
    'posts_per_page' => 8,
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
);
$sprwine = new WP_Query($sprparams);
?>
<!-------------------------------- Products Start ------------------------------------>
<section class="section-products">
    <div class="container">
        <div class="row">
            <div class="col-md82">
                <nav class="filter-nav">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link wine_title active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">All Wines</button>
                        <button class="nav-link wine_title" id="nav-red-tab" data-bs-toggle="tab" data-bs-target="#nav-red" type="button" role="tab" aria-controls="nav-red" aria-selected="false">Red Wine</button>
                        <button class="nav-link wine_title" id="nav-rose-tab" data-bs-toggle="tab" data-bs-target="#nav-rose" type="button" role="tab" aria-controls="nav-rose" aria-selected="false">Rose Wine</button>
                        <button class="nav-link wine_title" id="nav-white-tab" data-bs-toggle="tab" data-bs-target="#nav-white" type="button" role="tab" aria-controls="nav-white" aria-selected="false">White Wine</button>
                        <button class="nav-link wine_title" id="nav-sparkling-tab" data-bs-toggle="tab" data-bs-target="#nav-sparkling" type="button" role="tab" aria-controls="nav-sparkling" aria-selected="false">Sparkling Wine</button>
                    </div>
                </nav>
                <h2 class="filter-title">all wines</h2>
                <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-search">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                    <button class="btn btn-view-all mt-4 mt-md-0">view all</button>
                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
                        <div class="row gy-4" id="products_list">
                            <?php if ($products->have_posts()) : ?>
                                <?php foreach ($products->posts as $key => $product) :

                                    $product_img = wp_get_attachment_url(get_post_thumbnail_id($product->ID));

                                    $product_meta = get_post_meta($product->ID);


                                ?>
                                    <div class="col-md-4 col-lg-3">
                                        <div class="card">
                                            <div class="img-box">
                                                <a href="#" class="btn btn-cart">
                                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                                                    Add to Cart
                                                </a>
                                                <img src="<?= $product_img;  ?>" alt="product" class="card-img-top">
                                            </div>
                                            <a href="<?= get_permalink($product->ID) ?>">
                                                <div class="card-body text-center">
                                                    <h3 class="card-title"><?= $product->post_title; ?></h3>
                                                    <?php if (isset($product_meta['producer_id'])) : ?>
                                                        <p class="card-text"><?= $product_meta['producer_id'][0] ?></p>
                                                    <?php else : ?>
                                                        <p class="card-text">Nuvole</p>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                        <?php if ($p_count->publish > 8) : ?>
                        <div class="row">
                            <div class="col text-center mt-5">
                                <button id="load_more_products" class="btn btn-view">view more</button>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="tab-pane fade" id="nav-red" role="tabpanel" aria-labelledby="nav-red-tab">
                        <div class="row gy-4" id="redwine_list">
                            <?php if ($redwine->have_posts()) : ?>
                                <?php foreach ($redwine->posts as $key => $product) :

                                    $product_img = wp_get_attachment_url(get_post_thumbnail_id($product->ID));

                                    $product_meta = get_post_meta($product->ID);


                                ?>
                                    <div class="col-md-4 col-lg-3">
                                        <div class="card">
                                            <div class="img-box">
                                                <a href="#" class="btn btn-cart">
                                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                                                    Add to Cart
                                                </a>
                                                <img src="<?= $product_img; ?>" alt="product" class="card-img-top">
                                            </div>
                                            <a href="<?= get_permalink($product->ID) ?>">
                                                <div class="card-body text-center">
                                                    <h3 class="card-title"><?= $product->post_title; ?></h3>
                                                    <?php if (isset($product_meta['producer_id'])) : ?>
                                                        <p class="card-text"><?= $product_meta['producer_id'][0] ?></p>
                                                    <?php else : ?>
                                                        <p class="card-text">Nuvole</p>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                           <?php if ($redwine->found_posts > 8) : ?>
                        <div class="row">
                            <div class="col text-center mt-5">
                                <button class="btn btn-view" id="load_more_redwine">view more</button>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="tab-pane fade" id="nav-rose" role="tabpanel" aria-labelledby="nav-rose-tab">
                        <div class="row gy-4" id="rosewine_list">
                            <?php if ($rosewine->have_posts()) : ?>
                                <?php foreach ($rosewine->posts as $key => $product) :

                                    $product_img = wp_get_attachment_url(get_post_thumbnail_id($product->ID));

                                    $product_meta = get_post_meta($product->ID);


                                ?>
                                    <div class="col-md-4 col-lg-3">
                                        <div class="card">
                                            <div class="img-box">
                                                <a href="#" class="btn btn-cart">
                                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                                                    Add to Cart
                                                </a>
                                                <img src="<?= $product_img;  ?>" alt="product" class="card-img-top">
                                            </div>
                                            <a href="<?= get_permalink($product->ID) ?>">
                                                <div class="card-body text-center">
                                                    <h3 class="card-title"><?= $product->post_title; ?></h3>
                                                    <?php if (isset($product_meta['producer_id'])) : ?>
                                                        <p class="card-text"><?= $product_meta['producer_id'][0] ?></p>
                                                    <?php else : ?>
                                                        <p class="card-text">Nuvole</p>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                        <?php if ($rosewine->found_posts > 8) : ?>
                        <div class="row">
                            <div class="col text-center mt-5">
                                <button class="btn btn-view" id="load_more_rosewine">view more</button>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="tab-pane fade" id="nav-white" role="tabpanel" aria-labelledby="nav-white-tab">
                        <div class="row gy-4" id="whitewine_list">
                            <?php if ($whitewine->have_posts()) : ?>
                                <?php foreach ($whitewine->posts as $key => $product) :

                                    $product_img = wp_get_attachment_url(get_post_thumbnail_id($product->ID));

                                    $product_meta = get_post_meta($product->ID);


                                ?>
                                    <div class="col-md-4 col-lg-3">
                                        <div class="card">
                                            <div class="img-box">
                                                <a href="#" class="btn btn-cart">
                                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                                                    Add to Cart
                                                </a>
                                                <img src="<?= $product_img;  ?>" alt="product" class="card-img-top">
                                            </div>
                                            <a href="<?= get_permalink($product->ID) ?>">
                                                <div class="card-body text-center">
                                                    <h3 class="card-title"><?= $product->post_title; ?></h3>
                                                    <?php if (isset($product_meta['producer_id'])) : ?>
                                                        <p class="card-text"><?= $product_meta['producer_id'][0] ?></p>
                                                    <?php else : ?>
                                                        <p class="card-text">Nuvole</p>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                        <?php if ($whitewine->found_posts > 8) : ?>
                        <div class="row">
                            <div class="col text-center mt-5">
                                <button class="btn btn-view" id="load_more_whitewine">view more</button>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="tab-pane fade" id="nav-sparkling" role="tabpanel" aria-labelledby="nav-sparkling-tab">
                        <div class="row gy-4" id="sprwine_list">
                            <?php if ($sprwine->have_posts()) : ?>
                                <?php foreach ($sprwine->posts as $key => $product) :

                                    $product_img = wp_get_attachment_url(get_post_thumbnail_id($product->ID));

                                    $product_meta = get_post_meta($product->ID);


                                ?>
                                    <div class="col-md-4 col-lg-3">
                                        <div class="card">
                                            <div class="img-box">
                                                <a href="#" class="btn btn-cart">
                                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                                                    Add to Cart
                                                </a>
                                                <img src="<?= $product_img;  ?>" alt="product" class="card-img-top">
                                            </div>
                                            <a href="<?= get_permalink($product->ID) ?>">
                                                <div class="card-body text-center">
                                                    <h3 class="card-title"><?= $product->post_title; ?></h3>
                                                    <?php if (isset($product_meta['producer_id'])) : ?>
                                                        <p class="card-text"><?= $product_meta['producer_id'][0] ?></p>
                                                    <?php else : ?>
                                                        <p class="card-text">Nuvole</p>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                            <?php endforeach;
                            endif; ?>
                        </div>
                    <?php if ($sprwine->found_posts > 8) : ?>
                        <div class="row">
                            <div class="col text-center mt-5">
                                <button class="btn btn-view" id="load_more_sprwine">view more</button>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
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
<!-------------------------------- Products End ------------------------------------>
<?php get_footer(); ?>
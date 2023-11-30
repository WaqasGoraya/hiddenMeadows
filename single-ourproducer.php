<?php

get_header();
global $post;
$post_meta = get_post_meta($post->ID);
$content = apply_filters('the_content', $post->post_content);
$link = '#';
if (isset($post_meta['producer_button_link'][0])) {
    $link = $post_meta['producer_button_link'][0];
}

// echo "<pre>";
// print_r($link);
// exit;
?>

<!-------------------------------- Producers Start ------------------------------------>
<section class="section-producer-inner">
    <div class="container">
        <div class="row gy-3">
            <div class="col-md-6 order-2 order-md-1">
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="section-text">
                    <?= $content; ?>
                </div>
                <br>
                <a href="<?= $link; ?>" class="btn btn-visit">
                    <span class="me-2">Visit Producer Site</span>
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>

            <div class="col-md-6 order-1 order-md-2">
                <img src="<?= the_post_thumbnail_url($post->ID) ?>" alt="producer" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-------------------------------- Producers End ------------------------------------>

<!--------------------------- our wine Section Start ----------------------------->
<section class="our-wine text-center our-wine-inner">
    <div class="container">
        <div class="up-text">
            <span class="text-white">Related Wines</span>
        </div>
        <h2 class="text-center mb-4 text-white">Lorem Ipsum</h2>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-3">
                <div class="wine-main-sec">
                    <div class="winehover">
                        <button> <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart"> Add to cart</button>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/win-blck.png" alt="">

                    </div>
                    <a href="#">
                        <div class="wine-text">
                            <h5>Lorem Ipsum</h5>
                            <p class="mb-0">Nuvole</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-3">
                <div class="wine-main-sec">
                    <div class="winehover">
                        <button> <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart"> Add to cart</button>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/product-4.png" alt="">

                    </div>
                    <a href="#">
                        <div class="wine-text">
                            <h5>Lorem Ipsum</h5>
                            <p class="mb-0">Prà Dône</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-3">
                <div class="wine-main-sec">
                    <div class="winehover">
                        <button> <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart"> Add to cart</button>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/wine-red.png" alt="">

                    </div>
                    <a href="#">
                        <div class="wine-text" style="background-color: #fff; ">
                            <h5>Lorem Ipsum</h5>
                            <p class="mb-0">Crocevia</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-3 mt-3">
                <div class="wine-main-sec">
                    <div class="winehover">
                        <button> <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart"> Add to cart</button>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/wine-red-2.png" alt="">

                    </div>
                    <a href="#">
                        <div class="wine-text" style="background-color: #fff; ">
                            <h5>Lorem Ipsum</h5>
                            <p class="mb-0">Rivella</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center text-md-end mt-60">
                <a href="#" class="view-more-link">
                    <span class="pe-2">view more</span>
                    <i class="fa fa-long-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!--------------------------- our wine Section End ------------------------------->

<?php get_footer(); ?>
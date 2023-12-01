<?php

// Template Name: Home

get_header();


$blogs_args = array(

    'post_type' => 'ourblogs',

    'post_status' => 'publish',

    'posts_per_page' => 6,

    'orderby' => 'date',

    'order' => 'ASC',

);

$blogs_query = new WP_Query($blogs_args);

?>
<!--------------------------- our wine Section Start ----------------------------->
<section class="section-products pt-3 pb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <span class="wine-tagline">our wine</span>
                <h2 class="wine-title">Hidden Meadows Wine Shop</h2>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="img-box">
                        <a href="#" class="btn btn-cart">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                            Add to Cart
                        </a>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/win-blck.png" alt="product" class="card-img-top">
                    </div>
                    <a href="product_detail.html">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">Nuvole</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="img-box">
                        <a href="#" class="btn btn-cart">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                            Add to Cart
                        </a>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/win-blck.png" alt="product" class="card-img-top">
                    </div>
                    <a href="product_detail.html">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">Nuvole</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="img-box">
                        <a href="#" class="btn btn-cart">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                            Add to Cart
                        </a>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/win-blck.png" alt="product" class="card-img-top">
                    </div>
                    <a href="product_detail.html">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">Nuvole</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="img-box">
                        <a href="#" class="btn btn-cart">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                            Add to Cart
                        </a>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/win-blck.png" alt="product" class="card-img-top">
                    </div>
                    <a href="product_detail.html">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">Nuvole</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mt-5">
                <a href="#" class="btn btn-see-all">see all</a>
            </div>
        </div>
    </div>
</section>
<!--------------------------- our wine Section End ------------------------------->


<!------------------------ Artical Section Start -------------------------------->
<section class="artical-sec">
    <div class="container">
        <div class="up-text">
            <span>BLOG & NEWS</span>
        </div>
        <h2 class="mb-4 text-center text-white fw-bold">Latest Articles</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <?php if ($blogs_query->have_posts()) : ?>
                    <?php foreach ($blogs_query->posts as $key => $blog) :
                        $blog_img = wp_get_attachment_url(get_post_thumbnail_id($blog->ID));

                        $blog_meta = get_post_meta($blog->ID);
                    ?>
                        <div class="swiper-slide">
                            <div class="main-div">
                                <div class="img-sec">
                                    <img class="img-fluid" src="<?= $blog_img; ?>" alt="">
                                </div>
                                <div class="artical-details">
                                    <h5><?= $blog->post_title; ?></h5>
                                    <p><?= $blog->post_excerpt; ?></p>
                                    <a href="<?= get_permalink($blog->ID); ?>" class="read-more-link">read more <i class=" ms-1 fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                <?php endforeach;
                endif; ?>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!------------------------ Artical Section End ---------------------------------->

<!------------------------ Customer Section Start ------------------------------->
<section class="customer">
    <div class="container mb-4">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="testimonial">
                    <div class="up-text text-start">
                        <span class="customer-subtitle">Testimonials</span>
                    </div>
                    <h2 class="title">What Customers Say</h2>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec
                        ullamcorper
                        mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                        elit
                        tell us luctus nec.</p>
                </div>
            </div>
            <div class="col-lg-6 col-lg-pos">
                <div class="swiper testimonialSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/client.png" alt="client" class="img-client">
                                    <h3 class="card-title">Jonathon Doe</h3>
                                    <p class="card-subtitle">Customer</p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec.</p>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/stars.svg" alt="stars" class="img-stars">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/client.png" alt="client" class="img-client">
                                    <h3 class="card-title">Jonathon Doe</h3>
                                    <p class="card-subtitle">Customer</p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec.</p>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/stars.svg" alt="stars" class="img-stars">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/previous-img.png" alt="" class="img-arrow">
                    </div>
                    <div class="swiper-button-next">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/next-img.svg" alt="" class="img-arrow">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-6 px-md-0">
                <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/testimonial-1.png" alt="">
            </div>
        </div>
    </div>
</section>
<!------------------------ Customer Section End --------------------------------->

<!------------------------ Search Section Start --------------------------------->
<section class="search-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="search-subtitle">Newsletter</p>
                <h2 class="search-title">Stay Up To Date</h2>
            </div>
            <div class="col-md-6 mt-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    <button class="btn btn-submit" type="submit">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Vector.svg" alt="submit" class="img-arrow">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------ Search Section End ----------------------------------->

<?php get_footer(); ?>
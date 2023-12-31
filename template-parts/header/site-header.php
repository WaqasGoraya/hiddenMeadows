<?php
global $post;
$slug = $post->post_name;
$cart = WC()->cart->get_cart_contents_count();
$excrept = '';
?>
<style>
    <?php if (is_page('home')) :
        $data = post_data('home');
        $img = $data['img'];
        $excrept = $data['excrept'];

    ?>.header-main-sec-bg {

        background: url("<?php echo $img; ?>") center no-repeat;
    }

    <?php elseif (is_product_category()) :
        $data = post_data('products');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.products-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.5), rgba(43, 43, 43, 0.5)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_singular('ourproducer')) :
        $data = post_data('producers');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.single-producer-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.3), rgba(43, 43, 43, 0.3)),
            url("../images/producer_banner.png") center center no-repeat;
    }

    <?php elseif (is_singular('ourblogs')) :
        $data = post_data('blog');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.single-blog-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.4), rgba(43, 43, 43, 0.4)),
            url("../images/single-blog-bg.png") center no-repeat;
    }

    <?php elseif (is_page('about')) :
        $data = post_data('about');
        $img = $data['img'];
        $excrept = $data['excrept'];

    ?>.about-bg {
        background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_page('products')) :
        $data = post_data('products');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.products-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.5), rgba(43, 43, 43, 0.5)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_page('producers')) :
        $data = post_data('producers');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.producers-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.3), rgba(43, 43, 43, 0.3)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_page('blog')) :
        $data = post_data('blog');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.blog-bg {
        background: url("<?php echo $img; ?>") center no-repeat;
    }

    <?php elseif (is_page('contact')) :
        $data = post_data('contact');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.contact-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.4), rgba(43, 43, 43, 0.4)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_page('cart')) :
        $data = post_data('cart');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.cart-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.3), rgba(43, 43, 43, 0.3)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_page('checkout')) :
        $data = post_data('checkout');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.checkout-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.3), rgba(43, 43, 43, 0.3)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_page('login')) :
        $data = post_data('auth');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.login-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.4), rgba(43, 43, 43, 0.4)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_page('register')) :
        $data = post_data('auth');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.register-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.4), rgba(43, 43, 43, 0.4)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_page('my-account')) :
        $data = post_data('auth');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.my-account-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.4), rgba(43, 43, 43, 0.4)),
            url("<?php echo $img; ?>") center center no-repeat;
    }
    <?php elseif (is_page('forgot-password')) :
        $data = post_data('auth');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.my-account-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.4), rgba(43, 43, 43, 0.4)),
            url("<?php echo $img; ?>") center center no-repeat;
    }
    <?php elseif (is_page('reset-password')) :
        $data = post_data('auth');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.my-account-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.4), rgba(43, 43, 43, 0.4)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php elseif (is_product()) :
        $data = post_data('prdouctdetail');
        $img = $data['img'];
        $excrept = $data['excrept'];
    ?>.product-detail-bg {
        background: linear-gradient(rgba(43, 43, 43, 0.5), rgba(43, 43, 43, 0.5)),
            url("<?php echo $img; ?>") center center no-repeat;
    }

    <?php endif; ?>
</style>

<body>
    <!-------------------------------- header Start ---------------------------------->
    <?php if (is_page('home')) : ?>
        <header class="header-main-sec header-main-sec-bg">
        <?php elseif (is_product_category()) : ?>
            <header class="header-main-sec inner-banner products-bg">
            <?php elseif (is_singular('ourproducer')) : ?>
                <header class="header-main-sec inner-banner single-producer-bg">
                <?php elseif (is_singular('ourblogs')) : ?>
                    <header class="header-main-sec inner-banner single-blog-bg">
                    <?php elseif (is_product()) : ?>
                        <header class="header-main-sec inner-banner product-detail-bg">
                        <?php else : ?>
                            <header class="header-main-sec inner-banner <?= $slug; ?>-bg">
                            <?php endif; ?>
                            <div class="container">
                                <div class="top-bar">
                                    <div class="row align-items-center">
                                        <div class="col-md-4 col-lg-6">
                                            <div class="top-social-links">
                                                <div class="d-flex gap-10">
                                                    <?php if (is_active_sidebar('header-top')) : ?>
                                                        <?php dynamic_sidebar('header-top-3'); ?>
                                                    <?php else : ?>
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-6">

                                            <div class="d-flex justify-content-end gap-5">
                                                <div>
                                                    <div class="icon">
                                                        <?php if (is_active_sidebar('header-top')) : ?>
                                                            <?php dynamic_sidebar('header-top-1'); ?>
                                                        <?php else : ?>
                                                            <i class="fa fa-envelope"></i>
                                                            <b><a href="#">hidden3344@gmail.com</a></b>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="icon">
                                                        <?php if (is_active_sidebar('header-top')) : ?>
                                                            <?php dynamic_sidebar('header-top-2'); ?>
                                                        <?php else : ?>
                                                            <i class="fa fa-phone"></i>
                                                            <b><a href="#">+1 324 657 897</a></b>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="navigation-bar mt-3">
                                    <nav class="navbar navbar-expand-lg navbar-light">
                                        <?php if (get_header_image()) : ?>
                                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                                                <img src="<?php header_image(); ?>" alt="logo">
                                            </a>
                                        <?php endif; ?>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                            <div class="navbar-nav align-items-center">
                                                <?php wp_nav_menu(
                                                    array(
                                                        'theme_location' => 'home_menu',
                                                        // 'container_class' => 'navbar-nav'
                                                    )
                                                );
                                                ?>
                                                <li class="nav-item">
                                                    <a class="nav-link position-relative" href="<?= site_url(); ?>/cart">
                                                        <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-icon">
                                                        <span class="cart-count"><?= $cart; ?></span>
                                                    </a>
                                                </li>
                                                <li class="nav-item user-icon">
                                                    <?php if (is_user_logged_in()) :
                                                        $current_user = wp_get_current_user();
                                                    ?>
                                                        <a class="nav-link logged-in">
                                                            <?= $current_user->display_name; ?>
                                                        </a>

                                                        <ul class="sub-menu logout">
                                                            <li>
                                                                <a href="<?= site_url(); ?>/my-account">My Account</a>
                                                            </li>
                                                            <li>
                                                                <a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
                                                            </li>
                                                        </ul>
                                                    <?php else : ?>
                                                        <a class="nav-link" href="<?= site_url(); ?>/my-account">
                                                            <img src="<?= get_template_directory_uri(); ?>/assets/images/icon_user.png" alt="cart" class="img-icon">
                                                        </a>
                                                    <?php endif; ?>
                                                </li>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <?php get_template_part(
                                    'template-parts/header/bread-crumb',
                                    null,
                                    array(
                                        'excrept' => $excrept,
                                    )
                                ); ?>
                            </div>
                            </header>
                            <!-------------------------------- header End ------------------------------------>
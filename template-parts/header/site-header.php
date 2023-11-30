<?php
global $post;
$slug = $post->post_name;
?>

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
                                        <div class="col-md-8 col-lg-6">
                                            <div class="d-flex gap-5">
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
                                        <div class="col-md-4 col-lg-6">
                                            <div class="top-social-links">
                                                <div class="d-flex justify-content-end gap-10">
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
                                            <div class="navbar-nav">
                                                <?php wp_nav_menu(
                                                    array(
                                                        'theme_location' => 'home_menu',
                                                        // 'container_class' => 'navbar-nav'
                                                    )
                                                );
                                                ?>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                                <?php get_template_part('template-parts/header/bread-crumb'); ?>
                            </div>
                            </header>
                            <!-------------------------------- header End ------------------------------------>
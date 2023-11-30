    <!------------------------ Footer Section Start --------------------------------->
    <footer class="footer-sec text-center">
        <div class="container">
            <?php if (get_header_image()) : ?>
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="img-fluid" src="<?php header_image(); ?>" alt="footer_logo">
                </a>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-4 mt-md-3 border-r">
                    <div class="address text-center text-white">
                        <?php if (is_active_sidebar('footer-widget')) : ?>
                            <?php dynamic_sidebar('footer-widget-1'); ?>
                        <?php else : ?>
                            <h6 class="mb-3">Address</h6>
                            <p>United States:JT-LAL Imports <br> LlcLa Jolla, CA Dummy21</p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4 py-3 pt-md-0 mt-md-3 border-r">
                    <div class="footer-social-links">
                        <h6 class="text-white mb-3">Follow Us</h6>
                        <div class="d-flex justify-content-center gap-10 gap-lg-15">
                            <?php if (is_active_sidebar('footer-widget')) : ?>
                                <?php dynamic_sidebar('footer-widget-2'); ?>
                            <?php else : ?>
                                <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/facebook.svg" alt=""></a>
                                <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/instagram.svg" alt=""></a>
                                <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/twitter.svg" alt=""></a>
                                <a href="#"><img src="<?= get_template_directory_uri(); ?>/assets/images/youtube.svg" alt=""></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <div class="contact">
                        <?php if (is_active_sidebar('footer-widget')) : ?>
                            <?php dynamic_sidebar('footer-widget-3'); ?>
                        <?php else : ?>
                            <h6 class="text-white">Contact Us</h6>
                            <a href="#">+1 324 657 897</a> <br>
                            <a href="#">hidden3344@gmail.com</a>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="secondarylinks mt-4">
                <?php wp_nav_menu(
                    array(
                        'theme_location' => 'footer_menu',
                    )
                );
                ?>
            </div>
        </div>
    </footer>
    <!------------------------ Footer Section End ----------------------------------->

    <!-------------------------------------- Copyright Start ------------------------>
    <div class="copyright">
        <div class="container">
            <div class="row gy-2 gy-lg-0">
                <div class="col-lg-6">
                    <?php if (is_active_sidebar('footer-widget')) : ?>
                        <?php dynamic_sidebar('footer-widget-4'); ?>
                    <?php else : ?>
                        <p class="copyright-text">&copy; Copyright HiddenMeadowsImport. All Rights Reserved</p>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">
                    <p class="last-text">Designed &amp; Developed by <a href="https://leadconcept.com/">LEADconcept</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------- Copyright End -------------------------->
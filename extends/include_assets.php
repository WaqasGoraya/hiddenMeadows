<?php
function add_theme_scripts()
{
    // styles
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');

    wp_enqueue_style('font_awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', array(), '1.1', 'all');

    wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '1.1', 'all');

    wp_enqueue_style('owl_theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css', array(), '1.1', 'all');

    wp_enqueue_style('wp-google-fonts', get_template_directory_uri() . 'https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap', array(), '1.1', 'all');

    wp_enqueue_style('wp-google-fonts', get_template_directory_uri() . 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap', array(), '1.1', 'all');

    wp_enqueue_style('custom_style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

    wp_enqueue_style('swiper_style', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all');

    // scripts

    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/assets/js/owl-carousel.min.js', array('jquery'), 1.1, true);

    wp_enqueue_script('swiper_script', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), 1.0, true);

    wp_enqueue_script('custom_script', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), 1.0, true);

    wp_enqueue_script('sweet_alert', get_template_directory_uri() . '/assets/js/sweatalert.js', array('jquery'), 1.0, true);

    wp_enqueue_script('jquery_validate', get_template_directory_uri() . '/assets/js/jquery-validate.js', array('jquery'), 1.0, true);

    wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/my-ajax-script.js', array('jquery'), 1.1, true);

    wp_enqueue_script('products-script', get_template_directory_uri() . '/assets/js/products.js', array('jquery'), 1.1, true);

    wp_localize_script('custom-script', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
    wp_enqueue_script('custom-script');


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

//preconnect google fonts 
function dmc_google_font_loader_tag_filter($html, $handle)
{
    if ($handle === 'wp-google-fonts') {
        $rel_preconnect = "rel='preconnect' href='https://fonts.googleapis.com'" . PHP_EOL . "rel='preconnect' href='https://fonts.gstatic.com' crossorigin";

        return str_replace(
            "rel='stylesheet'",
            $rel_preconnect,
            $html
        );
    }
    return $html;
}
add_filter('style_loader_tag', 'dmc_google_font_loader_tag_filter', 10, 2);

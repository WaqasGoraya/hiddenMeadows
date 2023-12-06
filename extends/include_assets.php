<?php
function add_theme_scripts()
{
    // styles
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_style('custom_style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');

    wp_enqueue_script('custom_script', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), 1.0, true);

    wp_enqueue_script('sweet_alert', 'https://cdn.jsdelivr.net/npm/sweetalert2@11', array('jquery'), 1.0, true);

    wp_enqueue_script('jquery_validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.20.0/jquery.validate.min.js', array('jquery'), 1.0, true);

    wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/my-ajax-script.js', array('jquery'), 1.1, true);

    wp_enqueue_script('products-script', get_template_directory_uri() . '/assets/js/products.js', array('jquery'), 1.1, true);

    wp_localize_script('custom-script', 'my_ajax_object', array('ajaxurl' => admin_url('admin-ajax.php')));
    wp_enqueue_script('custom-script');


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');



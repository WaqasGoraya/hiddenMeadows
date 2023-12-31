<?php

function producer_post()

{

    $labels = array(

        'name' => __('Producers'),

        'singular_name' => __('Producer'),

        'all_items'           => __('All Producers'),

        'view_item'           => __('View Producer'),

        'add_new_item'        => __('Add New Producer'),

        'add_new'             => __('Add New Producer'),

        'edit_item'           => __('Edit Producer'),

        'update_item'         => __('Update Producer'),

        'search_items'        => __('Search Producer'),

        'not_found' => __('No Producer found'),

        'search_items' => __('Producer')

    );



    $args = array(



        'labels' => $labels,

        'description' => 'Add  Producers contents',

        'menu_position' => 27,

        'public' => true,

        'has_archive' => true,

        'map_meta_cap' => true,

        'capability_type' => 'post',

        'hierarchical' => true,

        'rewrite' => array('slug' => false),

        'menu_icon' => 'dashicons-beer',

        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),

        // 'taxonomies' => array('category'),

    );



    register_post_type('ourproducer', $args);
}

add_action('init', 'producer_post');


function blog_posts()

{

    $labels = array(

        'name' => __('Blogs'),

        'singular_name' => __('Blog'),

        'all_items'           => __('All Blogs'),

        'view_item'           => __('View Blog'),

        'add_new_item'        => __('Add New Blog'),

        'add_new'             => __('Add New Blog'),

        'edit_item'           => __('Edit Blog'),

        'update_item'         => __('Update Blog'),

        'search_items'        => __('Search Blog'),

        'not_found' => __('No Blog found'),

        'search_items' => __('Blog')

    );



    $args = array(



        'labels' => $labels,

        'description' => 'Add  Blog contents',

        'menu_position' => 28,

        'public' => true,

        'has_archive' => true,

        'map_meta_cap' => true,

        'capability_type' => 'post',

        'hierarchical' => true,

        'rewrite' => array('slug' => false),

        'menu_icon' => 'dashicons-welcome-write-blog',

        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions', 'image_advanced'),

        // 'taxonomies' => array('category'),

    );



    register_post_type('ourblogs', $args);
}

add_action('init', 'blog_posts');


// // Bottom Slider
// function bottom_slider_posts()

// {

//     $labels = array(

//         'name' => __('Bottom Slider'),

//         'singular_name' => __('Bottom Slider'),

//         'all_items'           => __('All Slider'),

//         'view_item'           => __('View Slide'),

//         'add_new_item'        => __('Add New Slide'),

//         'add_new'             => __('Add New Slide'),

//         'edit_item'           => __('Edit Slide'),

//         'update_item'         => __('Update Slide'),

//         'search_items'        => __('Search Slide'),

//         'not_found' => __('No Slide found'),

//         'search_items' => __('Slide')

//     );



//     $args = array(



//         'labels' => $labels,

//         'description' => 'Add  Home Page Bottom',

//         'menu_position' => 28,

//         'public' => true,

//         'has_archive' => true,

//         'map_meta_cap' => true,

//         'capability_type' => 'post',

//         'hierarchical' => true,

//         'rewrite' => array('slug' => false),

//         'menu_icon' => 'dashicons-columns',

//         'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),

//         // 'taxonomies' => array('category'),

//     );



//     register_post_type('bottom_slider', $args);
// }

// add_action('init', 'bottom_slider_posts');


// Testimonial custom post

function testimonials_post()

{

    $labels = array(

        'name' => __('Testimonials'),

        'singular_name' => __('Testimonial'),

        'all_items'           => __('All Testimonials'),

        'view_item'           => __('View Testimonial'),

        'add_new_item'        => __('Add New Testimonial'),

        'add_new'             => __('Add New Testimonial'),

        'edit_item'           => __('Edit Testimonial'),

        'update_item'         => __('Update Testimonial'),

        'search_items'        => __('Search Testimonial'),

        'not_found' => __('No Testimonial found'),

        'search_items' => __('Testimonial')

    );



    $args = array(



        'labels' => $labels,

        'description' => 'Add  Testimonials contents',

        'menu_position' => 27,

        'public' => true,

        'has_archive' => true,

        'map_meta_cap' => true,

        'capability_type' => 'post',

        'hierarchical' => true,

        'rewrite' => array('slug' => false),

        'menu_icon' => 'dashicons-testimonial',

        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),

        // 'taxonomies' => array('category'),

    );



    register_post_type('ourtestimonial', $args);
}

add_action('init', 'testimonials_post');

// Site Setting custom post
function sitesettings_post()

{

    $labels = array(

        'name' => __('Site Settings'),

        'singular_name' => __('Site Setting'),

        'all_items'           => __('All Site Settings'),

        'view_item'           => __('View Site Setting'),

        'add_new_item'        => __('Add New Site Setting'),

        'add_new'             => __('Add New Site Setting'),

        'edit_item'           => __('Edit Site Setting'),

        'update_item'         => __('Update Site Setting'),

        'search_items'        => __('Search Site Setting'),

        'not_found' => __('No Site Setting found'),

        'search_items' => __('Site Setting')

    );



    $args = array(



        'labels' => $labels,

        'description' => 'Add Site Setting contents',

        'menu_position' => 27,

        'public' => true,

        'has_archive' => true,

        'map_meta_cap' => true,

        'capability_type' => 'post',

        'hierarchical' => true,

        'rewrite' => array('slug' => false),

        'menu_icon' => 'dashicons-admin-generic',

        'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions'),

        'taxonomies' => array('category'),

    );



    register_post_type('sitesettings', $args);
}

add_action('init', 'sitesettings_post');
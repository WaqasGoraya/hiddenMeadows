<?php


add_action('wp_ajax_load_more_producers', 'load_more_producers');
add_action('wp_ajax_nopriv_load_more_producers', 'load_more_producers');

function load_more_producers()
{

    $offset = $_POST["offset"];
    $producers_args = array(

        'post_type' => 'ourproducer',

        'post_status' => 'publish',

        'posts_per_page' => 3,

        'orderby' => 'date',

        'order' => 'ASC',

        'offset' => $offset

    );

    $producers_query = new WP_Query($producers_args);

    $response = '';

    $count = wp_count_posts($post_type = 'ourproducer');

    // $count = $producers_query->max_num_pages;


    if ($producers_query->have_posts()) {

        ob_start();

        foreach ($producers_query->posts as $key => $producer) {

            $producer_img = wp_get_attachment_url(get_post_thumbnail_id($producer->ID));

            $producer_meta = get_post_meta($producer->ID);

            $response .= '<div class="col-md-6 col-lg-4">
                            <a href="' . get_permalink($producer->ID) . '">
                            <div class="producers-card">
                                <img src="' . $producer_img . '" alt="producer" class="img-producer">
                                <p class="inner_a">' . $producer->post_title . '</p>
                            </div>
                           </a>
                         </div>';
            ob_end_clean();
        }
    } else {
        $response = '';
    }

    //echo $response;


    $result = [
        'max' => $count->publish,
        'html' => $response,
    ];

    echo json_encode($result);


    wp_die();
}


//blogs
add_action('wp_ajax_load_more_blogs', 'load_more_blogs');
add_action('wp_ajax_nopriv_load_more_blogs', 'load_more_blogs');

function load_more_blogs()
{
    $offset = $_POST["offset"];
    $blogs_args = array(

        'post_type' => 'ourblogs',

        'post_status' => 'publish',

        'posts_per_page' => 3,

        'orderby' => 'date',

        'order' => 'ASC',

        'offset' => $offset

    );

    $blogs_query = new WP_Query($blogs_args);

    $response = '';

    $count = wp_count_posts($post_type = 'ourblogs');

    if ($blogs_query->have_posts()) {

        ob_start();

        foreach ($blogs_query->posts as $key => $blog) {

            echo $key;


            $blog_img = wp_get_attachment_url(get_post_thumbnail_id($blog->ID));

            $blog_meta = get_post_meta($blog->ID);

            $response .=  ' <div class="blog-1">
                              <div class="container">
                             <div class="blog-content">
                                <div class="row" >';

            if (!($key + 1 & 1)) {
                $response .=  '<div class="col-12 col-lg-6">
                                    <img class="img-fluid blog-img" src="' . $blog_img . '" alt="blog-image">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="blog-text">
                                        <div class="up-text">
                                            <span>' . the_author_meta('display_name', $blog->post_author) . get_the_date("d.m.Y", $blog->ID) . '</span>
                                        </div>
                                        <h3>' . $blog->post_title . '</h3>
                                        <p>' . $blog->post_excerpt . '</p>
                                        <div>
                                            <a href="' . get_permalink($blog->ID) . '" class="blog-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>';
            } else {
                $response .=    '<div class="col-12 col-lg-6 order-2 order-lg-1">
                                    <div class="blog-text">
                                        <div class="up-text">
                                            <span>' . the_author_meta('display_name', $blog->post_author) . get_the_date("d.m.Y", $blog->ID) . '</span>
                                        </div>
                                        <h3>' . $blog->post_title . '</h3>
                                        <p>' . $blog->post_excerpt . '</p>
                                        <div>
                                            <a href="' . get_permalink($blog->ID) . '" class="blog-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 order-1 order-lg-2">
                                    <img class="img-fluid blog-img" src="' . $blog_img . '" alt="blog-image">
                                </div>';
            }
            $response .= '</div>
                     </div>
                 </div>
            </div>';


            ob_end_clean();
        }
    } else {
        $response = '';
    }
    $result = [
        'max' => $count->publish,
        'html' => $response,
    ];

    echo json_encode($result);

    wp_die();
}

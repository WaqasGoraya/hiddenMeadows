    <?php
    get_header();
    global $post;
    $content = apply_filters('the_content', $post->post_content);
    ?>
    <!-- Single blog main section  -->
    <section class="single-blog-main-sec">
        <div class="single-main-head">
            <div class="container">
                <div class="mt-4 mb-4">
                    <div class="up-text">
                        <span> <?php the_author_meta('display_name', $post->post_author); ?> . <?= get_the_date("d.m.Y", $post->ID); ?></span>
                    </div>
                    <h3><?php the_title(); ?></h3>
                </div>

                <div class="row mb-3">
                    <div class="col-lg-12">
                        <div>
                            <img class="img-blog" src="<?= the_post_thumbnail_url($post->ID) ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <?= $content; ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="single-blog-btn d-flex mb-4">
                <div>
                    <button class="ms-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 23 12" fill="none">
                            <path d="M0 6L10 0.226497V11.7735L0 6ZM23 7H9V5H23V7Z" fill="#631A1C" />
                        </svg> Previous
                    </button>
                </div>
                <div>
                    <button class="me-4">
                        Next <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 23 12" fill="none">
                            <path d="M23 6L13 0.226497V11.7735L23 6ZM0 7H14V5H0V7Z" fill="#631A1C" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>
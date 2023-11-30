<?php

// Template Name: About

get_header();
global $post;
?>
<!-------------------------------- About Start ------------------------------------>
<section class="section-about">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-content">
                    <?php echo get_post_field('post_content', $post->ID); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------------------------------- About End ------------------------------------>

<?php get_footer(); ?>
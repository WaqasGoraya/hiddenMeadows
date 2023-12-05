         <?php if (is_page('home')) : ?>
             <!-- home breadcrumb start -->
             <div class="row row-pos">
                 <div class="col-md-7 flex-grow-1">
                     <div class="header-heading text-white py-90 py-lg-0">
                         <p class="change-color">Enhance Your Experience with</p>
                         <h1>Hidden Meadows</h1>
                         <p>Lorem Ipsum is simply dummy text of the printing and typesetting <br> industry. Lorem Ipsum
                             has
                             been the industry's standard dummy text ever.</p>
                         <div class="heading-btn mt-4 mb-3">
                             <a href="<?= site_url(); ?>/products" class="header-link">Shop Now</a>
                         </div>
                     </div>
                 </div>
             </div>
             <!-- home breadcrumb end -->
         <?php elseif (is_page('about')) : ?>
             <!-- about breadcrumb start -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title"><?php the_title(); ?></h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the readable content of a page hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- about breadcrumb end -->
         <?php elseif (is_page('contact')) : ?>
             <!-- contact us breadcrumb end -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title"><?php the_title(); ?></h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the readable content of a page hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- contact us breadcrumb end -->
         <?php elseif (is_page('blog')) : ?>
             <!-- blog breadcrumb start -->

             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title"><?php the_title(); ?></h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the
                         readable content of a page
                         hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- blog breadcrumb end -->
         <?php elseif (is_page('single-blog')) : ?>
             <!-- single blog breadcrumb start -->

             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title">Blog</h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the
                         readable content of a page
                         hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                             <li class="breadcrumb-item" aria-current="page">Lorem ipsum</li>
                         </ol>
                     </nav>
                 </div>
             </div>

             <!-- single blog breadcrumb end -->
         <?php elseif (is_page('products')) : ?>
             <!-- products breadcrumb start -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title"><?php the_title(); ?></h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the readable content of a page hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- products breadcrumb end -->
         <?php elseif (is_page('producers')) : ?>
             <!-- producer breadcrumb start -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title"><?php the_title(); ?></h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the readable content of a page hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- producer breadcrumb end -->
         <?php elseif (is_singular('ourproducer')) : ?>
             <!-- single producer breadcrumb start -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title"><?php the_title(); ?></h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the readable content of a page hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item"><a href="<?= site_url(); ?>/producers">Producers</a></li>
                             <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- single producer breadcrumb end -->
         <?php elseif (is_singular('ourblogs')) : ?>
             <!-- single producer breadcrumb start -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title">Blog</h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the
                         readable content of a page
                         hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item"><a href="<?= site_url(); ?>/blog">Blog</a></li>
                             <li class="breadcrumb-item" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- single producer breadcrumb end -->
         <?php elseif (is_page('cart')) : ?>
             <!-- cart producer breadcrumb start -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title"><?php the_title(); ?></h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the readable content of a page hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item"><a href="<?= site_url(); ?>/prooducts">Products</a></li>
                             <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- cart producer breadcrumb end -->
         <?php elseif (is_page('checkout')) : ?>
             <!-- cart producer breadcrumb start -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title"><?php the_title(); ?></h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the readable content of a page hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item"><a href="<?= site_url(); ?>/cart">Cart</a></li>
                             <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- cart producer breadcrumb end -->

         <?php elseif (is_page('login')) : ?>
             <!-- login  breadcrumb start -->
             <div class="row login-box-pos mb-5 mb-md-0">
                 <div class="col-md-7 text-center mx-auto flex-xxl-grow-1">
                     <div class="login-box">
                         <h2 class="box-title">Log in to your account</h2>
                         <?= do_shortcode('[wc_login_form_bbloomer]'); ?>
                         <img src="<?= get_template_directory_uri(); ?>/assets/images/wine-1.png" alt="wine" class="img-wine">
                     </div>
                 </div>
             </div>
             <!-- login breadcrumb end -->
         <?php elseif (is_page('register')) : ?>
             <!-- register breadcrumb start -->
             <div class="row login-box-pos mb-5 mb-md-0">
                 <div class="col-md-7 text-center mx-auto flex-xxl-grow-1">
                     <div class="login-box">
                         <h2 class="box-title">Signup Here</h2>
                         <h4 class="sub-heading">Sign Up To Continue</h4>
                         <?= do_shortcode('[wc_reg_form_bbloomer]'); ?>
                         <img src="<?= get_template_directory_uri(); ?>/assets/images/wine-1.png" alt="wine" class="img-wine">
                     </div>
                 </div>
             </div>
             <!-- register breadcrumb end -->
         <?php elseif (is_page('forgot-password')) : ?>
             <!-- forgot-password breadcrumb start -->
             <div class="row login-box-pos mb-5 mb-md-0">
                 <div class="col-md-7 text-center mx-auto flex-xxl-grow-1">
                     <div class="login-box">
                         <h2 class="box-title">Forgot Password</h2>
                         <?= do_shortcode('[woocommerce_lost_password]'); ?>
                         <img src="<?= get_template_directory_uri(); ?>/assets/images/wine-1.png" alt="wine" class="img-wine">
                     </div>
                 </div>
             </div>
             <!-- forgot-password breadcrumb end -->
         <?php elseif (is_page('reset-password')) : ?>
             <!-- reset-password breadcrumb start -->
             <div class="row login-box-pos mb-5 mb-md-0">
                 <div class="col-md-7 text-center mx-auto flex-xxl-grow-1">
                     <div class="login-box">
                         <h2 class="box-title">Reset Password</h2>
                         <?= do_shortcode('[woocommerce_reset_password]'); ?>
                     </div>
                 </div>
             </div>
             <!-- reset-password breadcrumb end -->
         <?php elseif ($_SERVER['REQUEST_URI'] == '/hidden_meadows/my-account/lost-password/?reset-link-sent=true') : ?>
             <!-- reset-password confirmation breadcrumb start -->
             <div class="row login-box-pos mb-5 mb-md-0">
                 <div class="col-md-7 text-center mx-auto flex-xxl-grow-1">
                     <div class="login-box">
                         <?= do_shortcode('[woocommerce_lost_password_confirmation]'); ?>
                     </div>
                 </div>
             </div>
             <!-- reset-password confirmation breadcrumb end -->
         <?php elseif (is_page('my-account')) : ?>
             <!-- my account breadcrumb start -->
             <div class="row row-pos-inner mb-5 mb-md-0">
                 <div class="col-md-12 mx-auto flex-xxl-grow-1">
                     <div class="">
                         <h2 class="banner-title">My Account</h2>
                     </div>
                 </div>
             </div>
             <!-- my account breadcrumb end -->
         <?php elseif (is_product_category()) : ?>
             <!-- products breadcrumb start -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title"><?php the_title(); ?></h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the readable content of a page hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                             <li class="breadcrumb-item">Products</li>
                             <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- products breadcrumb end -->
         <?php elseif (is_product()) : ?>
             <!-- product breadcrumb start -->
             <div class="row row-pos-inner">
                 <div class="col-md-8 text-center mx-auto flex-xl-grow-1">
                     <h1 class="banner-title">product</h1>
                     <p class="banner-text">It is a long established fact that a reader will be distracted by the readable content of a page hen looking at its layout the point of using Lorem Ipsum</p>
                     <nav aria-label="breadcrumb">
                         <ol class="breadcrumb justify-content-center">
                             <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                             <li class="breadcrumb-item"><a href="<?= site_url(); ?>/products">Products</a></li>
                             <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                         </ol>
                     </nav>
                 </div>
             </div>
             <!-- product breadcrumb end -->
         <?php endif; ?>
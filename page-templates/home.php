<?php

// Template Name: Home

get_header();

?>
<!--------------------------- our wine Section Start ----------------------------->
<section class="section-products pt-3 pb-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <span class="wine-tagline">our wine</span>
                <h2 class="wine-title">Hidden Meadows Wine Shop</h2>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="img-box">
                        <a href="#" class="btn btn-cart">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                            Add to Cart
                        </a>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/win-blck.png" alt="product" class="card-img-top">
                    </div>
                    <a href="product_detail.html">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">Nuvole</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="img-box">
                        <a href="#" class="btn btn-cart">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                            Add to Cart
                        </a>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/win-blck.png" alt="product" class="card-img-top">
                    </div>
                    <a href="product_detail.html">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">Nuvole</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="img-box">
                        <a href="#" class="btn btn-cart">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                            Add to Cart
                        </a>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/win-blck.png" alt="product" class="card-img-top">
                    </div>
                    <a href="product_detail.html">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">Nuvole</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card">
                    <div class="img-box">
                        <a href="#" class="btn btn-cart">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/cart.png" alt="cart" class="img-cart">
                            Add to Cart
                        </a>
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/win-blck.png" alt="product" class="card-img-top">
                    </div>
                    <a href="product_detail.html">
                        <div class="card-body text-center">
                            <h3 class="card-title">Lorem Ipsum</h3>
                            <p class="card-text">Nuvole</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center mt-5">
                <a href="#" class="btn btn-see-all">see all</a>
            </div>
        </div>
    </div>
</section>
<!--------------------------- our wine Section End ------------------------------->

<!------------------------ Delicious Section Start ------------------------------->
<!-- <section class="delicious">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                    <div class="main-sec mt-5">
                        <p class="mb-0">Special Offers</p>
                        <h3>Deal of the Delicious Wine</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim.
                            <br> <br>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus.
                            <br> <br>
                            <i> <b>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</b></i>
                        </p>
                        <div class="deliciious-btn mt-4">
                            <button>Shop Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 mt-3">
                    <div>
                        <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/bottle.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!------------------------ Delicious End ----------------------------------------->

<!------------------------ Wine Making Section Start ----------------------------->
<!-- <section class="wine-making">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/wine-1.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-sec mt-3">
                        <div class="up-text text-start">
                            <span>Our Wine</span>
                        </div>
                        <h2>Process of WineMaking</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,luctus nec
                            ullamcorper mattis, pulvinar dapibus leo.</p>
                        <div class="harvesting mt-3 ">
                            <img class="img-fluid me-3" src="<?= get_template_directory_uri(); ?>/assets/images/harvesting.png" alt="">
                            <div>
                                <h5 class="mb-0">Harvesting</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                    tellus,luctus nec.</p>
                            </div>
                        </div>
                        <div class="harvesting mt-3 ">
                            <img class="img-fluid me-3" src="<?= get_template_directory_uri(); ?>/assets/images/prcs-1.png" alt="">
                            <div>
                                <h5 class="mb-0">Crushing & Pressing</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                    tellus,luctus nec.</p>
                            </div>
                        </div>
                        <div class="harvesting mt-3 ">
                            <img class="img-fluid me-3" src="<?= get_template_directory_uri(); ?>/assets/images/prcs-2.png" alt="">
                            <div>
                                <h5 class="mb-0">Fermentation</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                    tellus,luctus nec.</p>
                            </div>
                        </div>
                        <div class="harvesting mt-3 ">
                            <img class="img-fluid me-3" src="<?= get_template_directory_uri(); ?>/assets/images/prcs-3.png" alt="">
                            <div>
                                <h5 class="mb-0">Ageing & Bottling</h5>
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                    tellus,luctus nec.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!------------------------ Wine Making Section End --------------------------->

<!------------------------ Amount Section Start ------------------------------>
<!-- <section class="amount">
        <div class="container">
            <div class="mid-sec">
                <p class="mb-0">Wanna booking for a</p>
                <h2>Large Amount Wine?</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting.</p>
                <div>
                    <button>Get a Qoute</button>
                </div>
            </div>
        </div>
    </section> -->
<!------------------------ Amount Section End ----------------------------------->

<!------------------------ Artical Section Start -------------------------------->
<section class="artical-sec">
    <div class="container">
        <div class="up-text">
            <span>BLOG & NEWS</span>
        </div>
        <h2 class="mb-4 text-center text-white fw-bold">Latest Articles</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="main-div">
                        <div class="img-sec">
                            <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/artical-1.png" alt="">
                        </div>
                        <div class="artical-details">
                            <h5>Travelling Solo Is Awesome</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                is simply dummy text of the printing and typesetting.</p>
                            <a href="#" class="read-more-link">read more <i class=" ms-1 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-div">
                        <div class="img-sec">
                            <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/artical-2.png" alt="">
                        </div>
                        <div class="artical-details bg-white">
                            <h5>Travelling Solo Is Awesome</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                is simply dummy text of the printing and typesetting.</p>
                            <a href="#" class="read-more-link">read more <i class=" ms-1 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-div">
                        <div class="img-sec">
                            <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/artical-3.png" alt="">
                        </div>
                        <div class="artical-details">
                            <h5>Travelling Solo Is Awesome</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                is simply dummy text of the printing and typesetting.</p>
                            <a href="#" class="read-more-link">read more <i class=" ms-1 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-div">
                        <div class="img-sec">
                            <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/artical-1.png" alt="">
                        </div>
                        <div class="artical-details">
                            <h5>Travelling Solo Is Awesome</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                is simply dummy text of the printing and typesetting.</p>
                            <a href="#" class="read-more-link">read more <i class=" ms-1 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-div">
                        <div class="img-sec">
                            <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/artical-2.png" alt="">
                        </div>
                        <div class="artical-details">
                            <h5>Travelling Solo Is Awesome</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                is simply dummy text of the printing and typesetting.</p>
                            <a href="#" class="read-more-link">read more <i class=" ms-1 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="main-div">
                        <div class="img-sec">
                            <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/artical-3.png" alt="">
                        </div>
                        <div class="artical-details">
                            <h5>Travelling Solo Is Awesome</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum
                                is simply dummy text of the printing and typesetting.</p>
                            <a href="#" class="read-more-link">read more <i class=" ms-1 fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<!------------------------ Artical Section End ---------------------------------->

<!------------------------ Customer Section Start ------------------------------->
<section class="customer">
    <div class="container mb-4">
        <div class="row gy-4">
            <div class="col-lg-6">
                <div class="testimonial">
                    <div class="up-text text-start">
                        <span class="customer-subtitle">Testimonials</span>
                    </div>
                    <h2 class="title">What Customers Say</h2>
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec
                        ullamcorper
                        mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut
                        elit
                        tell us luctus nec.</p>
                </div>
            </div>
            <div class="col-lg-6 col-lg-pos">
                <div class="swiper testimonialSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/client.png" alt="client" class="img-client">
                                    <h3 class="card-title">Jonathon Doe</h3>
                                    <p class="card-subtitle">Customer</p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec.</p>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/stars.svg" alt="stars" class="img-stars">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-body">
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/client.png" alt="client" class="img-client">
                                    <h3 class="card-title">Jonathon Doe</h3>
                                    <p class="card-subtitle">Customer</p>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tell us luctus nec.</p>
                                    <img src="<?= get_template_directory_uri(); ?>/assets/images/stars.svg" alt="stars" class="img-stars">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/previous-img.png" alt="" class="img-arrow">
                    </div>
                    <div class="swiper-button-next">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/next-img.svg" alt="" class="img-arrow">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-6 px-md-0">
                <img class="img-fluid" src="<?= get_template_directory_uri(); ?>/assets/images/testimonial-1.png" alt="">
            </div>
        </div>
    </div>
</section>
<!------------------------ Customer Section End --------------------------------->

<!------------------------ Search Section Start --------------------------------->
<section class="search-sec">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="search-subtitle">Newsletter</p>
                <h2 class="search-title">Stay Up To Date</h2>
            </div>
            <div class="col-md-6 mt-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Your Email Address">
                    <button class="btn btn-submit" type="submit">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/Vector.svg" alt="submit" class="img-arrow">
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------------------ Search Section End ----------------------------------->

<?php get_footer(); ?>
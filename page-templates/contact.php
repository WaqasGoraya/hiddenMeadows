<?php

// Template Name: Contact Us

get_header();

?>
<!-------------------------------- Contact Cards Start ------------------------------------>
<section class="section-contact-cards">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-4 d-flex">
                <div class="contact-media">
                    <div class="icon">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/contact_phone.png" alt="icon" class="img-contact">
                    </div>
                    <div class="content">
                        <h3 class="title">Phone</h3>
                        <a href="tel:+12345678156" class="link">+1 234 5678 156</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="contact-media">
                    <div class="icon">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/contact_phone.png" alt="icon" class="img-contact">
                    </div>
                    <div class="content">
                        <h3 class="title">Email</h3>
                        <a href="mailto:hidden3344@gmail.com" class="link">hidden3344@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex">
                <div class="contact-media">
                    <div class="icon">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/contact_phone.png" alt="icon" class="img-contact">
                    </div>
                    <div class="content">
                        <h3 class="title">Address</h3>
                        <a href="tel:+12345678156" class="link">United States:JT-LAL Imports LlcLa Jolla, CA Dummy21</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------------------------------- Contact Cards End ------------------------------------>

<!--------------------------- Contact Form Start ----------------------------->
<section class="section-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto">
                <form id="contact_form">
                    <div class="row gy-3 gy-md-0 mb-3">
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="row gy-3 gy-md-0 mb-3">
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                    </div>
                    <div class="row gy-3 gy-md-0 mb-3">
                        <div class="col">
                            <textarea class="form-control" cols="30" rows="3" placeholder="Message" name="message"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-submit">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--------------------------- Contact Form End ------------------------------->

<?php get_footer(); ?>
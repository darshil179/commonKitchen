<!DOCTYPE html>
<html lang="en">
    <?php include APPPATH . 'views/inc/front_head.php'; ?>
    <body>
        <!-- Preloader Starts -->
        <div class="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader End -->

        <!-- Header Area Starts -->
        <?php include APPPATH . 'views/inc/front_header.php'; ?>
        <!-- Header Area End -->

        <!-- Banner Area Starts -->
        <section class="banner-area banner-area2 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1><i>Different Categories</i></h1>
                        <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area End -->

        <!-- Welcome Area Starts -->
        <section class="blog_categorie_area">
            <div class="container">
                <div class="row">
                    <?php foreach ($category_list as $row): ?>
                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0" style="margin-bottom: 1.5rem!important;">
                            <div class="categories_post">
                                <img style="width: 314px; height: 214px;" src="<?php echo base_url() ?>images/categoryImage/<?php echo $row->Cat_Name; ?>/<?php echo $row->Cat_Image; ?>" alt="post">
                                <div class="categories_details">
                                    <div class="categories_text">
                                        <a href="blog-details.html"><h5><?php echo $row->Cat_Name ?></h5></a>
                                        <div class="border_line"></div>
                                        <p><?php echo $row->Cat_Description ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </section>
        <!-- Welcome Area End -->

        <!-- Deshes Area Starts -->
        <div class="deshes-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-top2 text-center">
                            <h3>Our <span>special</span> deshes</h3>
                            <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md-6 align-self-center">
                        <h1>01.</h1>
                        <div class="deshes-text">
                            <h3><span>Garlic</span><br> green beans</h3>
                            <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.</p>
                            <span class="style-change">$12.00</span>
                            <a href="#" class="template-btn3 mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                        <img src="<?php echo base_url('frontend/commonkitchen/assets/images/deshes1.png'); ?>" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                        <img src="<?php echo base_url('frontend/commonkitchen/assets/images/deshes2.png'); ?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2">
                        <h1>02.</h1>
                        <div class="deshes-text">
                            <h3><span>Lemon</span><br> rosemary chicken</h3>
                            <p class="pt-3">Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she'd kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.</p>
                            <span class="style-change">$12.00</span>
                            <a href="#" class="template-btn3 mt-3">book a table <span><i class="fa fa-long-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Deshes Area End -->

        <!-- Testimonial Area Starts -->
        <section class="testimonial-area section-padding4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-top2 text-center">
                            <h3>Customer <span>says</span></h3>
                            <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-slider owl-carousel">
                            <div class="single-slide d-sm-flex">
                                <div class="customer-img mr-4 mb-4 mb-sm-0">
                                    <img src="assets/images/customer1.png" alt="">
                                </div>
                                <div class="customer-text">
                                    <h5>adame nesane</h5>
                                    <span><i>Chief Customer</i></span>
                                    <p class="pt-3">You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                                </div>
                            </div>
                            <div class="single-slide d-sm-flex">
                                <div class="customer-img mr-4 mb-4 mb-sm-0">
                                    <img src="assets/images/customer2.png" alt="">
                                </div>
                                <div class="customer-text">
                                    <h5>adam nahan</h5>
                                    <span><i>Chief Customer</i></span>
                                    <p class="pt-3">You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                                </div>
                            </div>
                            <div class="single-slide d-sm-flex">
                                <div class="customer-img mr-4 mb-4 mb-sm-0">
                                    <img src="assets/images/customer1.png" alt="">
                                </div>
                                <div class="customer-text">
                                    <h5>adame nesane</h5>
                                    <span><i>Chief Customer</i></span>
                                    <p class="pt-3">You're had. Subdue grass Meat us winged years you'll doesn't. fruit two also won one yielding creepeth third give may never lie alternet food.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Area End -->

        <!-- Footer Area Starts -->
        <?php include APPPATH . 'views/inc/front_footer.php'; ?>
        <!-- Footer Area End -->


        <!-- Javascript -->
        <?php include APPPATH . 'views/inc/front_script.php'; ?>
    </body>
</html>

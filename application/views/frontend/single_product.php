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
                        <h1><i><?php echo $product->Product_Name ?></i></h1>
                        <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area End -->
        <!-- Deshes Area Starts -->
        <div class="deshes-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 align-self-center">
                        <h1>01.</h1>
                        <div class="deshes-text">
                            <h3><span><?php echo $product->Product_Name; ?></span><br><?php echo $category->Subcategory_Name ?></h3>
                            <p class="pt-3"><?php echo $product->Product_Info; ?></p>
                            <span class="style-change"><?php echo $product->Price; ?></span>
                            <!--<a href="#" class="template-btn3 mt-3">Add to Cart <span><i class="fa fa-long-arrow-right"></i></span></a>-->
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                        <img class="img-fluid" src="<?php echo base_url() ?>images/productImage/<?php echo $product->Product_Name; ?>/<?php echo $product->Product_Img; ?>" alt="">
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

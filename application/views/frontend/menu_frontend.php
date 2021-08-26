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
        <section class="banner-area banner-area2 menu-bg text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1><i>Our Menu</i></h1>
                        <p class="pt-2"><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Area End -->

        <!-- Food Area starts -->
        <section class="food-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="section-top">
                            <h3><span class="style-change">we serve</span> <br>delicious food</h3>
                            <p class="pt-3">They're fill divide i their yielding our after have him fish on there for greater man moveth, moved Won't together isn't for fly divide mids fish firmament on net.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($Menu_list as $row): ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="single-food mt-5 mt-sm-0">
                                <div class="food-img">
                                    <img style="width: 350px;height: 290px;" src="<?php echo base_url() ?>images/productImage/<?php echo $row->Product_Name; ?>/<?php echo $row->Product_Img; ?>" class="img-fluid" alt="">
                                </div>
                                <div class="food-content">
                                    <div class="d-flex justify-content-between">
                                        <a href="<?php echo base_url(); ?>single_product/<?php echo $row->Product_Id ?>"><h5><?php echo $row->Product_Name ?></h5></a>
                                        <span class="style-change"><?php echo $row->Price ?></span>
                                    </div>
                                    <p class="pt-3"><?php echo $row->Product_Info ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Food Area End -->

        <!-- Table Area Starts -->
        <section class="table-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-top2 text-center">
                            <h3>Book <span>your</span> table</h3>
                            <p><i>Beast kind form divide night above let moveth bearing darkness.</i></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="#">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                </div>
                                <input type="text" id="datepicker">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-clock-o"></i></span>
                                </div>
                                <input type="text" id="datepicker2">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                                </div>
                                <input type="text">
                            </div>
                            <div class="table-btn text-center">
                                <a href="#" class="template-btn template-btn2 mt-4">book a table</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Table Area End -->

        <!-- Footer Area Starts -->
        <?php include APPPATH . 'views/inc/front_footer.php'; ?>
        <!-- Footer Area End -->


        <!-- Javascript -->
        <?php include APPPATH . 'views/inc/front_script.php'; ?>
    </body>
</html>

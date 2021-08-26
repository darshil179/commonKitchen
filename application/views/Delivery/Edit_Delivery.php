<!DOCTYPE html>
<html dir="ltr" lang="en">


    <!-- Mirrored from www.ampleadmin.wrappixel.com/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 04:41:51 GMT -->
    <?php include APPPATH . 'views/inc/adminhead.php'; ?>

    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <?php include APPPATH . 'views/inc/adminheader.php'; ?>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <?php include APPPATH . 'views/inc/adminsidebar.php'; ?>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb border-bottom">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-xs-12 align-self-center">
                            <h5 class="font-medium text-uppercase mb-0">Delivery Person</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">

                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>usermanagement">User Management</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Delivery Person</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="page-content container-fluid">
                    <!-- ============================================================== -->
                    <!-- Card Group  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card">
                                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>Delivery/Delivery_Controller/EditDelivery">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit Delivery Person</h4>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-9">
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Delivery Person Name</label>

                                                    <input type="text" value="<?php echo $Delivey->Delivery_Name ?>" class="form-control" id="inputname" name="del_name" placeholder="Delivery Person Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Delivery Person Email</label>

                                                    <input type="email" disabled="" value="<?php echo $Delivey->Delivery_Email ?>" class="form-control" id="inputname" name="del_email" placeholder="Delivery Person Email">
                                                    <input type="hidden" value="<?php echo $Delivey->Delivery_Email ?>" name="del_email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Delivery Person Mobile</label>

                                                    <input type="text" value="<?php echo $Delivey->Delivery_Mobile ?>" class="form-control" id="inputname" name="del_mobile" placeholder="Delivery Person Mobile">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Delivery Person Address</label>

                                                    <input type="text" value="<?php echo $Delivey->Address ?>" class="form-control" id="inputname" name="del_address" placeholder="Delivery Person Address">
                                                    <input type="hidden" value="<?php echo $Delivey->Delivery_Id ?>" name="del_id">
                                                </div>
<!--                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Address</label>

                                                    <input type="text" value="" class="form-control" id="inputname" name="chef_address" placeholder="Address">
                                                </div>-->
                                            </div>

                                        </div>
                                        <div class="action-form">
                                            <div class="form-group mb-0 text-left">
                                                <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Save</button>
                                                <a href="<?php echo base_url(); ?>usermanagement" class="btn btn-dark waves-effect waves-light">Cancel</a>
                                            </div>
                                        </div>


                                    </div>


                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Products yearly sales, Weather Cards Section  -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Manage Table & Walet Cards Section  -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User Table & Profile Cards Section  -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Todo list & Calender application  -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- Social Cards  -->
                    <!-- ============================================================== -->

                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <?php include APPPATH . 'views/inc/adminfooter.php'; ?>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- customizer Panel -->
        <!-- ============================================================== -->

        <div class="chat-windows"></div>
        <!-- ============================================================== -->
        <?php include APPPATH . 'views/inc/adminfooterscript.php'; ?>


        <!-- Mirrored from www.ampleadmin.wrappixel.com/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 04:42:39 GMT -->
</html>

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
                            <h5 class="font-medium text-uppercase mb-0">Item</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">

                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>package_item">Item List</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Item</li>
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
                                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>Package/Package_Controller/EditTodayPackageItem">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $GetPackageProducts->Package_name ?></h4>
                                        <div class="row">
                                            <div class="col-sm-4 col-md-9">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Select Sabji</label>


                                                    <select class="custom-select mr-sm-2" required="" name="sabji" id="inlineFormCustomSelect">
                                                        <option disabled="" selected>Choose Package</option>

                                                        <?php foreach ($Menu_list as $row): ?>
                                                            <?php if ($row->Product_Id == $GetPackageProducts->Product_Id) { ?>
                                                                <option selected="selected" value="<?php echo $row->Product_Id ?>"><?php echo $row->Product_Name ?></option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $row->Product_Id ?>"><?php echo $row->Product_Name ?></option>
                                                            <?php } ?>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <input type="hidden" value="<?php echo $GetPackageProducts->Package_Id ?>" name="package_id">
                                                    <input type="hidden" value="<?php echo $GetPackageProducts->Today_Id ?>" name="today_id">

                                                </div>
                                            </div>

                                        </div>
                                        <div class="action-form">
                                            <div class="form-group mb-0 text-left">
                                                <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Save</button>
                                                <a href="<?php echo base_url(); ?>package_item" class="btn btn-dark waves-effect waves-light">Cancel</a>
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
        <script src="<?php echo base_url('frontend/assets/libs/select2/dist/js/select2.full.min.js'); ?>"></script>
        <script src="<?php echo base_url('frontend/assets/libs/select2/dist/js/select2.min.js'); ?>"></script>
        <script src="<?php echo base_url('frontend/dist/js/pages/forms/select2/select2.init.js'); ?>"></script>
        <script>
            $(document).ready(function () {
                $('.select2-subji').select2({maximumSelectionLength: <?php echo $package_restriction->Sabji_1 ?>});

            });
        </script>
        <script>
            $(document).ready(function () {
                $('.select2-sweet').select2({maximumSelectionLength: <?php echo $package_restriction->Sweet ?>});

            });
        </script>


        <!-- Mirrored from www.ampleadmin.wrappixel.com/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 04:42:39 GMT -->
</html>

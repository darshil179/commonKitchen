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
                            <h5 class="font-medium text-uppercase mb-0">Package Restriction</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>package_restriction">Packages Restriction List</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Package Restriction</li>
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
                                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>Package/Package_controller/EditPackageRestriction">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit Package Restriction</h4>
                                        <!--                                        <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                                                    <span class="badge badge-info"><i class="fas fa-info"></i></span>
                                                                                    <strong> Form Action at begining of the form.</strong>
                                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                                        <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>-->
                                        <div class="row">
                                            <div class="col-sm-4 col-md-9">
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Package Category</label>

                                                    <select class="custom-select mr-sm-2" required="" name="package_id" id="inlineFormCustomSelect">
                                                        <option disabled="" selected>Choose Package</option>
                                                        
                                                        <?php foreach ($package_list as $row): ?>
                                                            <?php if ($row->Package_Id == $package_restriction->Package_Id) { ?>
                                                                <option selected="selected" value="<?php echo $row->Package_Id ?>"><?php echo $row->Package_name ?></option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $row->Package_Id ?>"><?php echo $row->Package_name ?></option>
                                                            <?php } ?>
                                                        <?php endforeach; ?>
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Roti Quantity</label>

                                                    <input type="number" value="<?php echo $package_restriction->Roti ?>" class="form-control" id="inputname" name="roti" placeholder="Roti Quantity">
                                                    <input type="hidden" value="<?php echo $package_restriction->R_Id ?>" name="r_id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Sabji 1 Quantity</label>

                                                    <input type="number" value="<?php echo $package_restriction->Sabji_1 ?>" class="form-control" id="inputname" name="sabji1" placeholder="Sabji 1">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Sabji 2 Quantity</label>

                                                    <input type="number" value="<?php echo $package_restriction->Sabji_2 ?>" class="form-control" id="inputname" name="sabji2" placeholder="Sabji 2">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Sweet Quantity</label>

                                                    <input type="number" value="<?php echo $package_restriction->Sweet ?>" class="form-control" id="inputname" name="sweet" placeholder="Sweet">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Pickel Quantity</label>

                                                    <input type="number" value="<?php echo $package_restriction->Pickel ?>" class="form-control" id="inputname" name="pickel" placeholder="Pickel Quantity">
                                                </div><div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Rosted Papad Quantity</label>

                                                    <input type="number" value="<?php echo $package_restriction->Rosted_Papad ?>" class="form-control" id="inputname" name="rosted_papad" placeholder="Rosted Papad">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Dal</label>

                                                    <input type="number" value="<?php echo $package_restriction->Dal ?>" class="form-control" id="inputname" name="dal" placeholder="Dal">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Rice</label>

                                                    <input type="number" value="<?php echo $package_restriction->Rice ?>" class="form-control" id="inputname" name="rice" placeholder="Rice">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Masala Chaas</label>

                                                    <input type="number" value="<?php echo $package_restriction->Masala_Chaas ?>" class="form-control" id="inputname" name="masala_chaas" placeholder="Masala Chaas">
                                                </div>

                                            </div>

                                        </div>
                                        <div class="action-form">
                                            <div class="form-group mb-0 text-left">
                                                <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Save</button>
                                                <a href="<?php echo base_url(); ?>package_restriction" class="btn btn-dark waves-effect waves-light">Cancel</a>
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

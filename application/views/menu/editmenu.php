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
                            <h5 class="font-medium text-uppercase mb-0"><?php echo $menu->Product_Name ?></h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">

                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Auth/Login_Controller/Dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
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
                                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>Menu/Menu_controller/Edit_product">
                                    <div class="card-body">
                                        <h4 class="card-title">Edit Product</h4>
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
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Select Category</label>

                                                    <select class="custom-select mr-sm-2" required="" name="cat_id" id="inlineFormCustomSelect">
                                                        <option disabled="" selected>Choose Category</option>
                                                        <?php foreach ($category_list as $row): ?>
                                                            <?php if ($row->Cat_ID == $menu->Cat_Id) { ?>
                                                                <option selected="selected" value="<?php echo $row->Cat_ID ?>"><?php echo $row->Cat_Name ?></option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $row->Cat_ID ?>"><?php echo $row->Cat_Name ?></option>
                                                            <?php } ?>
                                                        <?php endforeach; ?>
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Select Category</label>

                                                    <select class="custom-select mr-sm-2" required="" name="sub_id" id="inlineFormCustomSelect">
                                                        <option disabled="" selected>Choose Category</option>
                                                        <?php foreach ($subcategory_list as $row): ?>
                                                            <?php if ($row->Subcategory_Id == $menu->Subcategory_Id) { ?>
                                                                <option selected="selected" value="<?php echo $row->Subcategory_Id ?>"><?php echo $row->Subcategory_Name ?></option>
                                                            <?php } else { ?>
                                                                <option value="<?php echo $row->Subcategory_Id ?>"><?php echo $row->Subcategory_Name ?></option>
                                                            <?php } ?>
                                                        <?php endforeach; ?>
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Product Name</label>

                                                    <input type="text" value="<?php echo $menu->Product_Name ?>" class="form-control" id="inputname" name="pname" placeholder="Product Name">
                                                    <input type="hidden" value="<?php echo $menu->Product_Id ?>" name="pro_id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Product Information</label>

                                                    <input type="text" value="<?php echo $menu->Product_Info; ?>" class="form-control" id="inputname" name="info" placeholder="Product Information">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Price</label>

                                                    <input type="text" value="<?php echo $menu->Price; ?>" class="form-control" id="inputname" name="price" placeholder="Product Price">
                                                </div>
                                                <div class="form-group">

                                                    <label for="inputname" class="control-label col-form-label">Product Image</label>
                                                    <img style="width: 100px;" src="<?php echo base_url() ?>images/productImage/<?php echo $menu->Product_Name; ?>/<?php echo $menu->Product_Img; ?>">

                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="img" id="inputGroupFile01">
                                                        <!--<input type="hidden" value="<?php echo base_url() ?>images/productImage/<?php echo $menu->Product_Name; ?>/<?php echo $menu->Product_Img; ?>"name="img">-->
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="action-form">
                                            <div class="form-group mb-0 text-left">
                                                <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Save</button>
                                                <button type="submit" class="btn btn-dark waves-effect waves-light">Cancel</button>
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

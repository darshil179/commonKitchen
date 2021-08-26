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
                <div class="page-content container-fluid">
                    <!-- ============================================================== -->
                    <!-- Card Group  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card">
                                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>Package/Package_Controller/AddTodayItem">
                                    <div class="card-body">
                                        <h4 class="card-title"><?php echo $package_list->Package_name ?></h4>
                                        <?php foreach ($Get_cat_sub_name as $rows): ?>
                                            <h4 class="card-title"><?php echo $rows->Cat_Name ?> - <?php echo $rows->Subcategory_Name ?></h4>

                                            <div class="row">
                                                <div class="col-sm-4 col-md-9">
                                                    <div class="form-group">
                                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Select <?php echo $rows->Subcategory_Name ?></label>

                                                        <select class="form-control select2-subji" multiple="multiple" id="SubCat_<?php echo $rows->Subcategory_Id ?>" name="product[]" style="width: 100%;height: 36px;">
                                                            <option disabled="">Choose <?php echo $rows->Subcategory_Name ?></option>


                                                            <?php foreach ($Get_cat_sub as $row): ?>
                                                                <?php if ($rows->Cat_ID == $row->Cat_ID && $rows->Subcategory_Id == $row->Subcategory_Id) { ?>

                                                                    <option value="<?php echo $row->Product_Id ?>"><?php echo $row->Product_Name ?></option>
                                                                <?php } ?>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <input type="hidden" name="package_id" value="<?php echo $package_list->Package_Id ?>">

                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
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

        </div>
        <?php include APPPATH . 'views/inc/adminfooter.php'; ?>
    </div>
</div>

<div class="chat-windows"></div>
<!-- ============================================================== -->
<?php include APPPATH . 'views/inc/adminfooterscript.php'; ?>
<script src="<?php echo base_url('frontend/assets/libs/select2/dist/js/select2.full.min.js'); ?>"></script>
<script src="<?php echo base_url('frontend/assets/libs/select2/dist/js/select2.min.js'); ?>"></script>
<script src="<?php echo base_url('frontend/dist/js/pages/forms/select2/select2.init.js'); ?>"></script>
<script></script>
<script>
    $(document).ready(function () {
        $('.select2-subji').select2();
    });
</script>
</html>

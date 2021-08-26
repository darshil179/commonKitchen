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
                            <h5 class="font-medium text-uppercase mb-0">Product</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">

                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>menu">Menu</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
                                <form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>Menu/Menu_controller/Addproduct">
                                    <div class="card-body">
                                        <h4 class="card-title">Add New Product</h4>
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

                                                    <select class="custom-select mr-sm-2" id="cat_id"  name="cat_id">
                                                        <option disabled="" selected>Choose Category</option>
                                                        <?php foreach ($category_list as $row): ?>
                                                            <option value="<?php echo $row->Cat_ID ?>"><?php echo $row->Cat_Name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Select Sub-Category</label>

                                                    <select class="custom-select mr-sm-2" id="subcategory" name="sub_id">
                                                        <option disabled="" selected>Choose Sub-Category</option>
                                                        
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Product Name</label>

                                                    <input type="text" class="form-control" id="inputname" name="pname" placeholder="Product Name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Product Information</label>

                                                    <input type="text" class="form-control" id="inputname" name="info" placeholder="Product Information">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputname" class="control-label col-form-label">Price</label>

                                                    <input type="text" class="form-control" id="inputname" name="price" placeholder="Product Price">
                                                </div>
                                                <div class="form-group">

                                                    <label for="inputname" class="control-label col-form-label">Product Image</label>

                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" name="img" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="action-form">
                                            <div class="form-group mb-0 text-left">
                                                <button type="submit" class="btn btn-info waves-effect waves-light" name="submit">Save</button>
                                                <a href="<?php echo base_url(); ?>menu" class="btn btn-dark waves-effect waves-light">Cancel</a>
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
        <script>
            $('#cat_id').on('change', function () {
                    debugger;
                    var cat_id = $(this).val();
                    if (cat_id != '') {
                        
                        $.ajax({
                            url: '<?php echo base_url(); ?>General/General_Controller/fetch_category',
                            method: 'POST',
                            data: {cat_id: cat_id},
                            success: function (data) {
                                debugger;
                                var options = '';
                                options += '<option value="">Select category</option>';
                                for (var i = 0; i < data.length; i++) {
                                    options += '<option value="' + data[i].Subcategory_Id + '">' + data[i].Subcategory_Name + '</option>';
                                }

                                $('#subcategory').html(options);
//                            $('#city').html('<option value="">Select State First</option>');
                            }
                        });
                    } else {
                        $('#subcategory').html('<option value="">Select Category First</option>');
                    }
                });
        </script>


        <!-- Mirrored from www.ampleadmin.wrappixel.com/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 04:42:39 GMT -->
</html>

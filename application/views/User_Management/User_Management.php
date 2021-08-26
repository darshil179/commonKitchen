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
                            <h5 class="font-medium text-uppercase mb-0">User Management</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                            
                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Users</li>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="material-card card">
                                <div class="card-body">
                                    <h4 class="card-title">Franchise List<a href="<?php echo base_url(); ?>addfranchise" class="btn btn-danger text-white float-right ml-3 d-md-block">Add New Owner</a></h4>
                                    <div class="table-responsive">
                                        <table id="default_order1" class="table table-striped border display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Owner Id</th>
                                                    <th>Owner Name</th>
                                                    <th>Pin Code</th>
                                                    <th>Range of Pin-codes</th>
                                                    <th>Action</th>
                                                    <th>Add Origin</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($GetFranchiseList as $row): ?>
                                                    <tr>
                                                        <td><?php echo $row->Owner_Id ?></td>
                                                        <td><?php echo $row->Owner_Name ?></td>
                                                        <td><?php echo $row->PinCode ?></td>
                                                        <td><?php echo $row->Pincode_Range ?></td>
                                                        <td><a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>editfranchise/<?php echo $row->Owner_Id ?>"><i class="ti-pencil"></i></a>
                                                            <a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>deletefranchise/<?php echo $row->Owner_Id ?>"><i class="ti-trash"></i></a>
                                                        </td>
                                                        <td><a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>addorigin/<?php echo $row->Owner_Id ?>"><i class="ti-plus"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Owner Id</th>
                                                    <th>Owner Name</th>
                                                    <th>Pin Code</th>
                                                    <th>Range of Pin-codes</th>
                                                    <th>Action</th>
                                                    <th>Add Origin</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--//MANAGER LIST-->

                    <div class="row">
                        <div class="col-12">

                            <div class="material-card card">
                                <div class="card-body">
                                    <h4 class="card-title">Manager List<a href="<?php echo base_url(); ?>add_manager" class="btn btn-danger text-white float-right ml-3 d-md-block">Add New Manager</a></h4>

                                    <div class="table-responsive">
                                        <table id="default_order2" class="table table-striped border display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Manager Id</th>
                                                    <th>Manager Name</th>
                                                    <th>Manager Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($Manager as $row): ?>
                                                    <tr>
                                                        <td><?php echo $row->Manager_Id ?></td>
                                                        <td><?php echo $row->Manager_Name ?></td>
                                                        <td><?php echo $row->Manager_Email ?></td>
                                                        <td><?php echo $row->Mobile ?></td>
                                                        <td><a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>editManager/<?php echo $row->Manager_Id ?>"><i class="ti-pencil"></i></a>
                                                                <a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>deleteManager/<?php echo $row->Manager_Id ?>"><i class="ti-trash"></i></a>
                                                            </td>
                                                    </tr>
                                                <?php endforeach; ?>


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Manager Id</th>
                                                    <th>Manager Name</th>
                                                    <th>Manager Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">

                            <div class="material-card card">
                                <div class="card-body">
                                    <h4 class="card-title">Chef List<a href="<?php echo base_url(); ?>add_chef" class="btn btn-danger text-white float-right ml-3 d-md-block">Add New Chef</a></h4>

                                    <div class="table-responsive">
                                        <table id="default_order3" class="table table-striped border display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Chef Id</th>
                                                    <th>Chef Name</th>
                                                    <th>Chef Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($Chef as $row): ?>
                                                    <tr>
                                                        <td><?php echo $row->Chef_Id ?></td>
                                                        <td><?php echo $row->Chef_Name ?></td>
                                                        <td><?php echo $row->Chef_Email ?></td>
                                                        <td><?php echo $row->Chef_Mobile ?></td>
                                                        <td><a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>editChef/<?php echo $row->Chef_Id ?>"><i class="ti-pencil"></i></a>
                                                                <a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>deleteChef/<?php echo $row->Chef_Id ?>"><i class="ti-trash"></i></a>
                                                            </td>
                                                    </tr>
                                                <?php endforeach; ?>


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Chef Id</th>
                                                    <th>Chef Name</th>
                                                    <th>Chef Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Delivery Person-->
                    
                    <div class="row">
                        <div class="col-12">

                            <div class="material-card card">
                                <div class="card-body">
                                    <h4 class="card-title">Delivery List<a href="<?php echo base_url(); ?>add_delivery" class="btn btn-danger text-white float-right ml-3 d-md-block">Add New Delivery Person</a></h4>

                                    <div class="table-responsive">
                                        <table id="default_order4" class="table table-striped border display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Delivery Id</th>
                                                    <th>Delivery Person Name</th>
                                                    <th>Delivery Person Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($Delivey as $row): ?>
                                                    <tr>
                                                        <td><?php echo $row->Delivery_Id ?></td>
                                                        <td><?php echo $row->Delivery_Name ?></td>
                                                        <td><?php echo $row->Delivery_Email ?></td>
                                                        <td><?php echo $row->Delivery_Mobile ?></td>
                                                        <td><a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>editDelivery/<?php echo $row->Delivery_Id ?>"><i class="ti-pencil"></i></a>
                                                                <a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>deleteDelivery/<?php echo $row->Delivery_Id ?>"><i class="ti-trash"></i></a>
                                                            </td>
                                                    </tr>
                                                <?php endforeach; ?>


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Delivery Id</th>
                                                    <th>Delivery Person Name</th>
                                                    <th>Delivery Person Email</th>
                                                    <th>Mobile Number</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Card Group  -->
                    <!-- ============================================================== -->
                    <!--                    <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Category Name</th>
                                                        <th scope="col">Action</th>
                                                        <th scope="col">Handle</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                    <?php foreach ($category_list as $row): ?>
                                                                            
                                                                                                                <tr>
                                                                                                                    <th scope="row"><?php echo $row->Cat_ID ?></th>
                                                                                                                    <td>
                                                                                                                        <span class="text-muted"><?php echo $row->Cat_Name ?></span>
                                                                                                                    </td>
                                                                                                                    <td><a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>edit/<?php echo $row->Cat_ID ?>"><i class="ti-pencil"></i></a>
                                                                                                                        <a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>delete/<?php echo $row->Cat_ID ?>"><i class="ti-trash"></i></a>
                                                                                                                    </td>
                                                                                                                    <td>@mdo</td>
                                                                                                                </tr>
                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>-->
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
            $(function () {
                $("#default_order1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
        </script>
        <script>
            $(function () {
                $("#default_order2").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
        </script>
        <script>
            $(function () {
                $("#default_order3").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
        </script>
        <script>
            $(function () {
                $("#default_order4").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
        </script>
        <script src="<?php echo base_url('frontend/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?php echo base_url('frontend/dist/js/pages/datatable/datatable-basic.init.js'); ?>"></script>


        <!-- Mirrored from www.ampleadmin.wrappixel.com/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 04:42:39 GMT -->
</html>

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
                            <h5 class="font-medium text-uppercase mb-0">Packages Restriction</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                            <a href="<?php echo base_url(); ?>add_package_restriction" class="btn btn-danger text-white float-right ml-3 d-md-block">Add Package Restriction</a>
                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Packages Restriction List</li>
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
                                    <h4 class="card-title">Packages Restriction List</h4>
                                    <div class="table-responsive">
                                        <table id="default_order" class="table table-striped border display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Package Name</th>
                                                    <th>Roti</th>
                                                    <th>Sabji 1</th>
                                                    <th>Sabji 2</th>
                                                    <th>Sweet</th>
                                                    <th>Pickel</th>
                                                    <th>Rosted Papad</th>
                                                    <th>Dal</th>
                                                    <th>Rice</th>
                                                    <th>Masala_Chaas</th>
                                                    <th>Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($package_restriction as $row): ?>
                                                    <tr>
                                                        <td><?php echo $row->R_Id ?></td>
                                                        <td><?php echo $row->Package_name ?></td>
                                                        <td><?php echo $row->Roti ?></td>
                                                        <td><?php echo $row->Sabji_1 ?></td>
                                                        <td><?php echo $row->Sabji_2 ?></td>
                                                        <td><?php echo $row->Sweet ?></td>
                                                        <td><?php echo $row->Pickel ?></td>
                                                        <td><?php echo $row->Rosted_Papad ?></td>
                                                        <td><?php echo $row->Dal ?></td>
                                                        <td><?php echo $row->Rice ?></td>
                                                        <td><?php echo $row->Masala_Chaas ?></td>
                                                        <td><a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>editr/<?php echo $row->R_Id ?>"><i class="ti-pencil"></i></a>
                                                            <a class="btn btn-outline-info btn-circle btn-lg btn-circle ml-2" href="<?php echo base_url(); ?>deleter/<?php echo $row->R_Id ?>"><i class="ti-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Package Name</th>
                                                    <th>Roti</th>
                                                    <th>Sabji 1</th>
                                                    <th>Sabji 2</th>
                                                    <th>Sweet</th>
                                                    <th>Pickel</th>
                                                    <th>Rosted Papad</th>
                                                    <th>Dal</th>
                                                    <th>Rice</th>
                                                    <th>Masala_Chaas</th>
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
                $("#default_order").DataTable();
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

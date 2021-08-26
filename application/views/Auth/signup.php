<!DOCTYPE html>
<html dir="ltr">


    <!-- Mirrored from www.ampleadmin.wrappixel.com/ampleadmin-html/ampleadmin-sidebar/authentication-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 04:44:05 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('frontend/assets/images/favicon.png'); ?>">
        <title><?= $this->config->config["Pagetitle"] ?> | <?= $this->config->config["Admintitle"] ?></title>
        <!-- Custom CSS -->
        <link href="<?php echo base_url('frontend/dist/css/style.min.css" rel="stylesheet'); ?>">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <body>
        <div class="main-wrapper">
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
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?php echo base_url('frontend/assets/images/background/login-register.jpg'); ?>) no-repeat center center;">
                <div class="auth-box on-sidebar">
                    <div>
                        <div class="logo">
                            <span class="db"><img src="<?php echo base_url('frontend/assets/images/logos/logo-icon.png'); ?>" alt="logo" /></span>
                            <h5 class="font-medium mb-3">Sign Up to Admin</h5>
                        </div>
                        <!-- Form -->
                        <div class="row">
                            <div class="col-12">
                                <?php if ($this->session->flashdata('email')): ?>
                                    <div class="alert alert-danger"> <i class="ti-user"></i> <?php echo $this->session->flashdata('email'); ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button>
                                    </div>
                                <?php endif; ?>
                                <form class="form-horizontal mt-3" action="<?php echo base_url(); ?>Auth/Login_Controller/signUpDetail" method="POST">
                                    <div class="form-group row ">
                                        <div class="col-12 ">
                                            <input class="form-control form-control-lg" type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 ">
                                            <input class="form-control form-control-lg" type="text" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 ">
                                            <input class="form-control form-control-lg" type="password" name="pass" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 ">
                                            <input class="form-control form-control-lg" type="password" name="cpass" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 ">
                                            <input class="form-control form-control-lg" type="text" name="contact" placeholder="Contact Number">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-12 ">
                                            <input class="form-control form-control-lg" type="text" name="address" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12 ">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">I agree to all <a href="javascript:void(0)">Terms</a></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center ">
                                        <div class="col-xs-12 pb-3 ">
                                            <button class="btn btn-block btn-lg btn-info " type="submit " name="submit">SIGN UP</button>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 mt-2 ">
                                        <div class="col-sm-12 text-center ">
                                            Already have an account? <a href="authentication-login1.html" class="text-info ml-1 "><b>Sign In</b></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right Sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="<?php echo base_url('frontend/assets/libs/jquery/dist/jquery.min.js'); ?>"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?php echo base_url('frontend/assets/libs/popper.js/dist/umd/popper.min.js'); ?>"></script>
        <script src="<?php echo base_url('frontend/assets/libs/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>
            $('[data-toggle="tooltip "]').tooltip();
            $(".preloader ").fadeOut();
        </script>
    </body>


    <!-- Mirrored from www.ampleadmin.wrappixel.com/ampleadmin-html/ampleadmin-sidebar/authentication-register2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 04:44:05 GMT -->
</html>
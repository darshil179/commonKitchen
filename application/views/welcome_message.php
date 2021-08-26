<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>
<!DOCTYPE html>
<html dir="ltr">
    <?php include 'inc/adminlogin/loginhead.php'; ?>
    <body>
        <div class="main-wrapper">
            <!-- ============================================================== -->
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(../../assets/images/big/auth-bg.jpg) no-repeat center center;">
                <div class="auth-box">
                    <div id="loginform">
                        <div class="logo">
                            <span class="db"><img src="<?php echo base_url('frontend/assets/images/logos/logo-icon.png'); ?>" alt="logo" /></span>
                            <h5 class="font-medium mb-3">Sign In to Common Kitchen</h5>
                        </div>
                        <!-- Form -->
                        <div class="row">
                            <div class="col-12">
                                <form class="form-horizontal mt-3" method="post" id="loginform" enctype="multipart/form-data" action="<?php echo base_url(); ?>Auth/Login_Controller/getUserDetail">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><i class="ti-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" name="email" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon2"><i class="ti-pencil"></i></span>
                                        </div>
                                        <input type="text" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                <a href="javascript:void(0)" id="to-recover" class="text-dark float-right"><i class="fa fa-lock mr-1"></i> Forgot pwd?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <div class="col-xs-12 pb-3">
                                           <input type="submit" class="btn btn-block btn-lg btn-info" name="submit" value="LogIn" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                                            <div class="social">
                                                <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fab  fa-facebook"></i> </a>
                                                <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fab  fa-google-plus"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0 mt-2">
                                        <div class="col-sm-12 text-center">
                                            Don't have an account? <a href="<?php echo base_url(); ?>Auth/Login_Controller/Register" class="text-info ml-1"><b>Sign Up</b></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <?php include 'inc/adminlogin/loginfooterscript.php'; ?>
        <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>
            $('[data-toggle="tooltip"]').tooltip();
            $(".preloader").fadeOut();
            // ============================================================== 
            // Login and Recover Password 
            // ============================================================== 
            $('#to-recover').on("click", function () {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });
        </script>
    </body>
</html>
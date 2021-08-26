<!DOCTYPE html>
<html dir="ltr" lang="en">


    <!-- Mirrored from www.ampleadmin.wrappixel.com/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 04:41:51 GMT -->
    <?php include 'inc/adminhead.php'; ?>

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
            <?php include 'inc/adminheader.php'; ?>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <?php include 'inc/adminsidebar.php'; ?>
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
                            <h5 class="font-medium text-uppercase mb-0">Dashboard</h5>
                        </div>
                        <div class="col-lg-9 col-md-8 col-xs-12 align-self-center">
                            
                            <nav aria-label="breadcrumb" class="mt-2 float-md-right float-left">
                                <ol class="breadcrumb mb-0 justify-content-end p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                    <div class="card-group">
                        <div class="card p-2 p-lg-3">
                            <div class="p-lg-3 p-2">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-circle btn-danger text-white btn-lg" href="javascript:void(0)">
                                        <i class="ti-clipboard"></i>
                                    </button>
                                    <div class="ml-4" style="width: 38%;">
                                        <h4 class="font-light">Total Packages</h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="display-7 mb-0">3</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 p-lg-3">
                            <div class="p-lg-3 p-2">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-circle btn-cyan text-white btn-lg" href="javascript:void(0)">
                                        <i class="ti-wallet"></i>
                                    </button>
                                    <div class="ml-4" style="width: 38%;">
                                        <h4 class="font-light">Menu Items</h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-cyan" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="display-7 mb-0">13</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card p-2 p-lg-3">
                            <div class="p-lg-3 p-2">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-circle btn-warning text-white btn-lg" href="javascript:void(0)">
                                        <i class="fas fa-dollar-sign"></i>
                                    </button>
                                    <div class="ml-4" style="width: 38%;">
                                        <h4 class="font-light">Categories</h4>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                                        </div>
                                    </div>
                                    <div class="ml-auto">
                                        <h2 class="display-7 mb-0">3</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <?php include 'inc/adminfooter.php'; ?>
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
        <aside class="customizer">
            <a href="javascript:void(0)" class="service-panel-toggle">
                <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="customizer-body">
                <ul class="nav customizer-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                            <i class="mdi mdi-wrench font-20"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#chat" role="tab" aria-controls="chat" aria-selected="false">
                            <i class="mdi mdi-message-reply font-20"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <i class="mdi mdi-star-circle font-20"></i>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <!-- Tab 1 -->
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="p-3 border-bottom">
                            <!-- Sidebar -->
                            <h5 class="font-medium mb-2 mt-2">Layout Settings</h5>

                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input sidebartoggler" name="collapssidebar" id="collapssidebar">
                                <label class="custom-control-label" for="collapssidebar">Collapse Sidebar</label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" name="sidebar-position" id="sidebar-position">
                                <label class="custom-control-label" for="sidebar-position">Fixed Sidebar</label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" name="header-position" id="header-position">
                                <label class="custom-control-label" for="header-position">Fixed Header</label>
                            </div>
                            <div class="custom-control custom-checkbox mt-2">
                                <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
                                <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
                            </div>
                        </div>
                        <div class="p-3 border-bottom">
                            <!-- Logo BG -->
                            <h5 class="font-medium mb-2 mt-2">Logo Backgrounds</h5>
                            <ul class="theme-color">
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin1"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin2"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin3"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin4"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin5"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-logobg="skin6"></a>
                                </li>
                            </ul>
                            <!-- Logo BG -->
                        </div>
                        <div class="p-3 border-bottom">
                            <!-- Navbar BG -->
                            <h5 class="font-medium mb-2 mt-2">Navbar Backgrounds</h5>
                            <ul class="theme-color">
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin1"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin2"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin3"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin4"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin5"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-navbarbg="skin6"></a>
                                </li>
                            </ul>
                            <!-- Navbar BG -->
                        </div>
                        <div class="p-3 border-bottom">
                            <!-- Logo BG -->
                            <h5 class="font-medium mb-2 mt-2">Sidebar Backgrounds</h5>
                            <ul class="theme-color">
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin1"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin2"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin3"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin4"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin5"></a>
                                </li>
                                <li class="theme-item">
                                    <a href="javascript:void(0)" class="theme-link" data-sidebarbg="skin6"></a>
                                </li>
                            </ul>
                            <!-- Logo BG -->
                        </div>
                    </div>
                    <!-- End Tab 1 -->
                    <!-- Tab 2 -->
                    <div class="tab-pane fade" id="chat" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <ul class="mailbox list-style-none mt-3">
                            <li>
                                <div class="message-center chat-scroll">
                                    <a href="javascript:void(0)" class="message-item" id='chat_user_1' data-user-id='1'>
                                        <span class="user-img">
                                            <img src="../../assets/images/users/1.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status online pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item" id='chat_user_2' data-user-id='2'>
                                        <span class="user-img">
                                            <img src="../../assets/images/users/2.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status busy pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Sonu Nigam</h5>
                                            <span class="mail-desc">I've sung a song! See you at</span>
                                            <span class="time">9:10 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item" id='chat_user_3' data-user-id='3'>
                                        <span class="user-img">
                                            <img src="../../assets/images/users/3.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status away pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Arijit Sinh</h5>
                                            <span class="mail-desc">I am a singer!</span>
                                            <span class="time">9:08 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item" id='chat_user_4' data-user-id='4'>
                                        <span class="user-img">
                                            <img src="../../assets/images/users/4.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Nirav Joshi</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item" id='chat_user_5' data-user-id='5'>
                                        <span class="user-img">
                                            <img src="../../assets/images/users/5.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Sunil Joshi</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item" id='chat_user_6' data-user-id='6'>
                                        <span class="user-img">
                                            <img src="../../assets/images/users/6.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Akshay Kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item" id='chat_user_7' data-user-id='7'>
                                        <span class="user-img">
                                            <img src="../../assets/images/users/7.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="message-item" id='chat_user_8' data-user-id='8'>
                                        <span class="user-img">
                                            <img src="../../assets/images/users/8.jpg" alt="user" class="rounded-circle">
                                            <span class="profile-status offline pull-right"></span>
                                        </span>
                                        <div class="mail-contnet">
                                            <h5 class="message-title">Varun Dhavan</h5>
                                            <span class="mail-desc">Just see the my admin!</span>
                                            <span class="time">9:02 AM</span>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Tab 2 -->
                    <!-- Tab 3 -->
                    <div class="tab-pane fade p-3" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <h6 class="mt-3 mb-3">Activity Timeline</h6>
                        <div class="steamline">
                            <div class="sl-item">
                                <div class="sl-left bg-success">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="sl-right">
                                    <div class="font-medium">Meeting today
                                        <span class="sl-date"> 5pm</span>
                                    </div>
                                    <div class="desc">you can write anything </div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left bg-info">
                                    <i class="fas fa-image"></i>
                                </div>
                                <div class="sl-right">
                                    <div class="font-medium">Send documents to Clark</div>
                                    <div class="desc">Lorem Ipsum is simply </div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left">
                                    <img class="rounded-circle" alt="user" src="../../assets/images/users/2.jpg"> </div>
                                <div class="sl-right">
                                    <div class="font-medium">Go to the Doctor
                                        <span class="sl-date">5 minutes ago</span>
                                    </div>
                                    <div class="desc">Contrary to popular belief</div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left">
                                    <img class="rounded-circle" alt="user" src="../../assets/images/users/1.jpg"> </div>
                                <div class="sl-right">
                                    <div>
                                        <a href="javascript:void(0)">Stephen</a>
                                        <span class="sl-date">5 minutes ago</span>
                                    </div>
                                    <div class="desc">Approve meeting with tiger</div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left bg-primary">
                                    <i class="ti-user"></i>
                                </div>
                                <div class="sl-right">
                                    <div class="font-medium">Meeting today
                                        <span class="sl-date"> 5pm</span>
                                    </div>
                                    <div class="desc">you can write anything </div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left bg-info">
                                    <i class="fas fa-image"></i>
                                </div>
                                <div class="sl-right">
                                    <div class="font-medium">Send documents to Clark</div>
                                    <div class="desc">Lorem Ipsum is simply </div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left">
                                    <img class="rounded-circle" alt="user" src="../../assets/images/users/4.jpg"> </div>
                                <div class="sl-right">
                                    <div class="font-medium">Go to the Doctor
                                        <span class="sl-date">5 minutes ago</span>
                                    </div>
                                    <div class="desc">Contrary to popular belief</div>
                                </div>
                            </div>
                            <div class="sl-item">
                                <div class="sl-left">
                                    <img class="rounded-circle" alt="user" src="../../assets/images/users/6.jpg"> </div>
                                <div class="sl-right">
                                    <div>
                                        <a href="javascript:void(0)">Stephen</a>
                                        <span class="sl-date">5 minutes ago</span>
                                    </div>
                                    <div class="desc">Approve meeting with tiger</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Tab 3 -->
                </div>
            </div>
        </aside>
        <div class="chat-windows"></div>
        <!-- ============================================================== -->
        <?php include 'inc/adminfooterscript.php'; ?>


        <!-- Mirrored from www.ampleadmin.wrappixel.com/ampleadmin-html/ampleadmin-sidebar/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Apr 2019 04:42:39 GMT -->
</html>

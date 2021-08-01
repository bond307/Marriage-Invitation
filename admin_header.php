<!DOCTYPE html>
<!-- 
Template Name: Marvin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Contact: https://hencework.ticksy.com/

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Marriage Invitation</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
     <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    
    <!-- vector map CSS -->
    <link href="vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
    
    <link href="vendors/apexcharts/dist/apexcharts.css" rel="stylesheet" type="text/css" />
    
    <!-- Toggles CSS -->
    <link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Tablesaw table CSS 
    <link href="vendors/tablesaw/dist/tablesaw.css" rel="stylesheet" type="text/css" />-->
    <!-- Data Table CSS -->
    <link href="vendors/datatables.net-dt/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="vendors/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
    <!-- Toastr CSS -->
    <link href="vendors/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader 
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    --><!-- /Preloader -->
    
    <!-- HK Wrapper -->
    <div class="hk-wrapper hk-vertical-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon">
            <i data-feather="menu"></i></span></a>
            <a class="navbar-brand font-weight-700" href="dashboard1.html">
                <img src="dist/img/logo1.png" alt="logo" style="height: 3rem;" class="img-fluid">
            </a>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon">
                    <i data-feather="settings"></i></span></a>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" 
                    aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                               
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span><?php echo $_SESSION["islogin"];?><i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="admin_profile.php"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="changepassword.php"><i class="dropdown-icon zmdi zmdi-card"></i><span>Change password</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <!--<div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i>
                                <span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i>
                                <span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger">
                                </i><span>Offline</span></a>
                            </div>-->
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /Top Navbar -->

        <!-- Vertical Nav -->
        <nav class="hk-nav hk-nav-dark">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-item active">
                            <a href="admin_home.php" class="nav-link"  >
                                <span class="feather-icon"><i data-feather="activity"></i></span>
                                <span class="nav-link-text active">Dashboard</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="new_user.php" data-target="#auth_drp">
                                <span class="feather-icon"><i data-feather="zap"></i></span>
                                <span class="nav-link-text">New users</span>
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="pending_user.php"  data-target="#pages_drp">
                                <span class="feather-icon"><i data-feather="file-text"></i></span>
                                <span class="nav-link-text">Processing users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="completed_user.php" data-target="#pages_drp">
                                <span class="feather-icon"><i data-feather="file-text"></i></span>
                                <span class="nav-link-text">Completed users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="delivered_user.php" data-target="#pages_drp">
                                <span class="feather-icon"><i data-feather="file-text"></i></span>
                                <span class="nav-link-text">Delivered users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add_demo.php" data-target="#pages_drp">
                                <span class="feather-icon"><i data-feather="file-text"></i></span>
                                <span class="nav-link-text">Add invitation demos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="update_demo.php" data-target="#pages_drp">
                                <span class="feather-icon"><i data-feather="file-text"></i></span>
                                <span class="nav-link-text">Update invitation demos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="user_invitation_details.php" data-target="#pages_drp">
                                <span class="feather-icon"><i data-feather="file-text"></i></span>
                                <span class="nav-link-text"> User and invitation details</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!-- /Vertical Nav -->

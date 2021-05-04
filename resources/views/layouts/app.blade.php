<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/logo.png">

    <!-- App css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    @yield('css')

</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
        <div class="container-fluid">
            <!-- LOGO -->
            <a href="index.html" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <img src="/assets/images/logo.png" alt="" height="24" />
                            <span class="d-inline h5 ml-1 text-logo">Invoicer</span>
                        </span>
                <span class="logo-sm">
                            <img src="/assets/images/logo.png" alt="" height="24">
                        </span>
            </a>

            <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                <li class="">
                    <button class="button-menu-mobile open-left disable-btn">
                        <i data-feather="menu" class="menu-icon"></i>
                        <i data-feather="x" class="close-icon"></i>
                    </button>
                </li>
            </ul>

            <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list" data-toggle="tooltip" data-placement="left"
                    title="0 new unread notifications">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                       aria-expanded="false">
                        <i data-feather="bell"></i>
                        <span class="noti-icon-badge"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                        <!-- item-->
                        <div class="dropdown-item noti-title border-bottom">
                            <h5 class="m-0 font-size-16">
                                        <span class="float-right">
                                            <a href="" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                            </h5>
                        </div>

                        <div class="slimscroll noti-scroll">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item border-bottom">
                                <div class="notify-icon">
                                    <img src="/assets/images/users/avatar-1.jpg" class="img-fluid rounded-circle" alt="" />
                                </div>
                                <p class="notify-details">Karen Robinson</p>
                                <p class="text-muted mb-0 user-msg">
                                    <small>Wow ! this admin looks good and awesome design</small>
                                </p>
                            </a>

                        <!-- All-->
                        <a href="javascript:void(0);"
                           class="dropdown-item text-center text-primary notify-item notify-all border-top">
                            View all
                            <i class="fi-arrow-right"></i>
                        </a>

                    </div>
                </li>

                <li class="dropdown notification-list align-self-center profile-dropdown">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <div class="media user-profile ">
                            <img src="/assets/images/avatar.png" alt="user-image" class="rounded-circle align-self-center" />
                            <div class="media-body text-left">
                                <h6 class="pro-user-name ml-2 my-0">
                                    <span>Shreyu N</span>
                                </h6>
                            </div>
                            <span data-feather="chevron-down" class="ml-2 align-self-center"></span>
                        </div>
                    </a>
                    <div class="dropdown-menu profile-dropdown-items dropdown-menu-right">
                        <a href="pages-profile.html" class="dropdown-item notify-item">
                            <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                            <span>My Account</span>
                        </a>

                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                            <span>Settings</span>
                        </a>

                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i data-feather="help-circle" class="icon-dual icon-xs mr-2"></i>
                            <span>Support</span>
                        </a>

                        <a href="pages-lock-screen.html" class="dropdown-item notify-item">
                            <i data-feather="lock" class="icon-dual icon-xs mr-2"></i>
                            <span>Lock Screen</span>
                        </a>

                        <div class="dropdown-divider"></div>

                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
    <!-- end Topbar -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left-side-menu">
        <div class="media user-profile mt-2 mb-2">
            <img src="/assets/images/avatar.png" class="avatar-sm rounded-circle mr-2"  />
            <img src="/assets/images/avatar.png" class="avatar-xs rounded-circle mr-2" />

            <div class="media-body">
                <h6 class="pro-user-name mt-0 mb-0">dummies</h6>
                <span class="pro-user-desc">User</span>
            </div>
            <div class="dropdown align-self-center profile-dropdown-menu">
                <a class="dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                   aria-expanded="false">
                    <span data-feather="chevron-down"></span>
                </a>
                <div class="dropdown-menu profile-dropdown">
                    <a href="pages-profile.html" class="dropdown-item notify-item">
                        <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                        <span>My Account</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <a href="{{route('logout')}}" class="dropdown-item notify-item">
                        <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-content">
            <!--- Sidemenu -->
            <div id="sidebar-menu" class="slimscroll-menu">
                <ul class="metismenu" id="menu-bar">

                    <li>
                        <a href="{{route('dashboard')}}">
                            <i data-feather="home"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>
                    <li>
                        <a href="/customers">
                            <i data-feather="users"></i>
                            <span> Customers </span>
                        </a>
                    </li>
                    <li>
                        <a href="/products">
                            <i data-feather="shopping-bag"></i>
                            <span> Products </span>
                        </a>
                    </li>
                    <li>
                        <a href="/inventory">
                            <i data-feather="layers"></i>
                            <span> Inventory </span>
                        </a>
                    </li>
                    <li>
                        <a href="/invoice">
                            <i data-feather="clipboard"></i>
                            <span> Invoices </span>
                        </a>
                    </li>
                    <li>
                        <a href="/audit_log">
                            <i data-feather="list"></i>
                            <span> Audit Log </span>
                        </a>
                    </li><!--
                    <li>
                        <a href="javascript: void(0);">
                            <i data-feather="bookmark"></i>
                            <span> Tasks </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <ul class="nav-second-level" aria-expanded="false">
                            <li>
                                <a href="task-list.html">List</a>
                            </li>
                            <li>
                                <a href="task-board.html">Kanban Board</a>
                            </li>
                        </ul>
                    </li>-->
                </ul>
            </div>
            <!-- End Sidebar -->

            <div class="clearfix"></div>
        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row page-title">
                    <div class="col-md-12">
                        <h4 class="mb-1 mt-0">@yield('header')</h4>
                        @yield('content')
                    </div>
                </div>
            </div> <!-- container-fluid -->

        </div> <!-- content -->



        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        2021 &copy; Invoicer. All Rights Reserved. Crafted with <i class='uil uil-heart text-danger font-size-12'></i> by <a href="https://" target="_blank">Matt Rodney</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->


<!-- Vendor js -->
<script src="/assets/js/vendor.min.js"></script>

<!-- App js -->
<script src="/assets/js/app.min.js"></script>
@yield('js')

</body>
</html>

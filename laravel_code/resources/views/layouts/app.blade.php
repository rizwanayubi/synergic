<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App Favicon -->
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

    <!-- App title -->
    <title>{{isset($title)?$title:''}} - Admin</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Switchery css -->
    <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" />

    <!-- Jquery filer css -->
    <link href="assets/plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="assets/plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

    <!-- App CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    <!-- Modernizr js -->
    <script src="assets/js/modernizr.min.js"></script>

</head>


<body>

    <!-- Navigation Bar-->
    <header id="topnav">
        <div class="topbar-main">
            <div class="container">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                        <span>
                            <img src="assets/images/logo_login.png" alt="logo" width="60%">
                        </span>
                    </a>
                </div>
                <!-- End Logo container-->


                <div class="menu-extras">

                    <ul class="nav navbar-nav pull-right">

                        <li class="nav-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>

                        <li class="nav-item hidden-sm-down">
                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                <input placeholder="Search..." class="form-control" type="text">
                                <a href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </form>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i class="zmdi zmdi-notifications-none noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5>
                                        <small>
                                            <span class="label label-danger pull-xs-right">7</span>Notification</small>
                                    </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success">
                                        <i class="icon-bubble"></i>
                                    </div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="icon-user"></i>
                                    </div>
                                    <p class="notify-details">New user registered.
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger">
                                        <i class="icon-like"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <i class="zmdi zmdi-email noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title bg-success">
                                    <h5>
                                        <small>
                                            <span class="label label-danger pull-xs-right">7</span>Messages</small>
                                    </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/users/avatar-2.jpg" alt="img" class="img-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/users/avatar-3.jpg" alt="img" class="img-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Carlos Crouch</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="assets/images/users/avatar-4.jpg" alt="img" class="img-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                <i class="zmdi zmdi-format-subject noti-icon"></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                @if(isset(Auth::user()->image))
                                <img class="img img-circle" src="{{ asset('laravel_code/storage/app/public/user_image/'.Auth::user()->image) }}" alt="{{ Auth::user()->image }}"
                                /> @else
                                <img class="img img-circle" src="{{ asset('laravel_code/storage/app/public/user.png') }}" alt="User-image" /> @endif
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow">
                                        <small>Welcome ! 
                                            @if(isset(Auth::user()->name))
                                                {{Auth::user()->name}} : {{'Admin'}}
                                            @endif
                                        </small>
                                    </h5>
                                </div>

                                <!-- item-->
                                <a href="{{url('user_profile')}}" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i>
                                    <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="{{url('logout')}}" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i>
                                    <span class="logout">Logout</span>
                                </a>

                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end menu-extras -->
                <div class="clearfix"></div>
            </div>
            <!-- end container -->
        </div>
        <!-- end topbar-main -->
        <div class="navbar-custom">
            <div class="container">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">
                        <li>
                            <a href="{{ url('/home') }}">
                                <i class="zmdi zmdi-view-dashboard"></i>
                                <span> Home </span>
                            </a>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="zmdi zmdi-format-underlined"></i>
                                <span> Users </span>
                            </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="{{ url('/users') }}">Users</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/all_user_role') }}">User Roles</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-submenu">
                            <a href="#">
                                <i class="zmdi zmdi-format-underlined"></i>
                                <span> Job Categories </span>
                            </a>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>
                                        <li>
                                            <a href="{{ url('categories') }}">Categories</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('jobcat_form') }}">Add Category</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <!-- End navigation menu  -->
                </div>
            </div>
        </div>
    </header>
    <!-- End Navigation Bar-->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="wrapper">
        <div class="container">

            @yield('content')

            <!-- Footer -->
            <footer class="footer text-right">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            2018 © Synergic.
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
        <!-- container -->
        <!-- Right Sidebar -->
        <div class="side-bar right-bar">
            <div class="nicescroll">
                <ul class="nav nav-tabs text-xs-center">
                    <li class="nav-item">
                        <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                            Activity
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                            Settings
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="home-2">
                        <div class="timeline-2">
                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">5 minutes ago</small>
                                    <p>
                                        <strong>
                                            <a href="#" class="text-info">John Doe</a>
                                        </strong> Uploaded a photo
                                        <strong>"DSC000586.jpg"</strong>
                                    </p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">30 minutes ago</small>
                                    <p>
                                        <a href="" class="text-info">Lorem</a> commented your post.</p>
                                    <p>
                                        <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                            ut tincidunt euismod. "</em>
                                    </p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">59 minutes ago</small>
                                    <p>
                                        <a href="" class="text-info">Jessi</a> attended a meeting with
                                        <a href="#" class="text-success">John Doe</a>.</p>
                                    <p>
                                        <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                            ut tincidunt euismod. "</em>
                                    </p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">1 hour ago</small>
                                    <p>
                                        <strong>
                                            <a href="#" class="text-info">John Doe</a>
                                        </strong>Uploaded 2 new photos</p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">3 hours ago</small>
                                    <p>
                                        <a href="" class="text-info">Lorem</a> commented your post.</p>
                                    <p>
                                        <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                            ut tincidunt euismod. "</em>
                                    </p>
                                </div>
                            </div>

                            <div class="time-item">
                                <div class="item-info">
                                    <small class="text-muted">5 hours ago</small>
                                    <p>
                                        <a href="" class="text-info">Jessi</a> attended a meeting with
                                        <a href="#" class="text-success">John Doe</a>.</p>
                                    <p>
                                        <em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus
                                            ut tincidunt euismod. "</em>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="messages-2">

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">Notifications</h5>
                                <p class="text-muted m-b-0">
                                    <small>Do you need them?</small>
                                </p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">API Access</h5>
                                <p class="m-b-0 text-muted">
                                    <small>Enable/Disable access</small>
                                </p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">Auto Updates</h5>
                                <p class="m-b-0 text-muted">
                                    <small>Keep up to date</small>
                                </p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                            </div>
                        </div>

                        <div class="row m-t-20">
                            <div class="col-xs-8">
                                <h5 class="m-0">Online Status</h5>
                                <p class="m-b-0 text-muted">
                                    <small>Show your status to all</small>
                                </p>
                            </div>
                            <div class="col-xs-4 text-right">
                                <input type="checkbox" checked data-plugin="switchery" data-color="#64b0f2" data-size="small" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end nicescroll -->
        </div>
        <!-- /Right-bar -->



    </div>
    <!-- End wrapper -->


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/tether.min.js"></script>
    <!-- Tether for Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/plugins/switchery/switchery.min.js"></script>

    <!--Morris Chart-->
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>

    <!-- Counter Up  -->
    <script src="assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
    <script src="assets/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <!-- Page specific js -->
    <script src="assets/pages/jquery.dashboard.js"></script>
    <!-- Jquery filer js -->
    <script src="assets/plugins/jquery.filer/js/jquery.filer.min.js"></script>

    <!-- page specific js -->
    <script src="assets/pages/jquery.fileuploads.init.js"></script>

    <script>
        $(document).ready(function(){
            var resizefunc = [];
            $(document).on('click', '.logout', function(){
                var url = "{{ URL::to('/logout') }}";
                location.replace(url);
            });
        });

    </script>

</body>

</html>
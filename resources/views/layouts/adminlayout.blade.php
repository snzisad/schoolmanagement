<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href='{{asset("content/images/logo.png")}}'>
    <title>@yield('title')</title>

    <link href="{{asset('content/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
	<link href="{{asset('content/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href='{{asset("content/css/lib/owl.theme.default.min.css")}}' rel="stylesheet" />
    
    <!-- Bootstrap Core CSS -->
    <link href='{{asset("content/css/lib/bootstrap/bootstrap.min.css")}}' rel="stylesheet">

    <!-- Progress Bar -->
    <link href='{{asset("content/css/style.css")}}' rel="stylesheet">

    <!-- Custom Css for Admin Panel -->
    <link href='{{asset("content/css/adminpanel.css")}}' rel="stylesheet">

    <!-- Custom CSS -->
    <link href='{{asset("content/css/helper.css")}}' rel="stylesheet">
    
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <li class="nav-item"> 
                        <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)">
                        <div class="navbar-brand">
                            <img src='{{asset("content/images/logo.png")}}' alt="homepage" class="dark-logo" width="50px" height="50px" />
                        </div>
                        </a> 
                    </li>

                    <li class="nav-item m-l-10"> 
                        <a class="nav-link  hidden-sm-down text-muted  ">
                            <div class="navbar-brand">
                                <!-- Logo icon -->
                                <img src='{{asset("content/images/logo.png")}}' alt="homepage" class="dark-logo" width="55px" height="55px" />
                                <!--End Logo icon -->
                                <span class="school-eiin">EIIN: 105074  </span>
                            </div>
                        </a>
                    </li>
                </div>

                <!-- End Logo -->
                <div class="navbar-collapse">

                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    </ul>

                    <ul class="navbar-nav mr-auto">
                        <p class='school-name'>Faujdarhat Collegiate School, Chittagong</p>
                    </ul>

                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- Search -->
                        <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-search"></i> <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search here"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>
                        <!-- Logout -->
                        <li class="nav-item hidden-sm-down"> 
                            <a class="nav-link hidden-sm-down text-muted"  href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">

                                <i class="fa fa-power-off"></i> <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div></a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>

                        <li class="nav-label">Home</li>
                        <li> <a class="email-compose.html" href="/dashboard"><i class="fa fa-tachometer"></i>Dashboard</a>
                        </li>
                        <li> <a class="email-compose.html" href="/institution"><i class="fa fa-institution"></i>Institution Details</a>
                        </li>
                        <li> <a class="email-compose.html" href="/noticelist"><i class="fa fa-info-circle"></i></i>Notice</a>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-hand-paper-o"></i><span class="hide-menu">Attendence</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i> Student's Attendence</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#"><i class="fa fa-arrow-right"></i> Individual Attendance</span></a></li>
                                        <li><a href="#"><i class="fa fa-arrow-right"></i> Today's Attendance</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-right"></i> Attendance Report</a></li>
                                    </ul>
                                </li>
                                <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i> Employee's Attendence</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="#"><i class="fa fa-arrow-right"></i> Individual Attendance</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-right"></i> Today's Attendance</a></li>
                                        <li><a href="#"><i class="fa fa-arrow-right"></i> Attendance Report</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-dollar"></i><span class="hide-menu">Fee Collection</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="/feecollection"><i class="fa fa-arrow-right"></i> Collect Fee</a></li>
                                <li><a href="email-compose.html"><i class="fa fa-arrow-right"></i> Collection Report</a></li>
                            </ul>
                        </li>

                        <li class="nav-label">Academic</li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-calendar-check-o"></i>Class Routine</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-calendar-plus-o"></i>Exam Routine</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-address-card-o"></i>Admit Card</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-cubes"></i>Manage Classes</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-database"></i>Manage Subjects</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-window-restore"></i>Marks Distribution</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-calendar"></i>Academic Session</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-calculator"></i>Examination Marks</a>
                        </li>

                        <li class="nav-label">Students</li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-user-plus"></i>Admit Student</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-users"></i>Student List</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-line-chart"></i>Progress</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-bookmark"></i>Testimonial</a>
                        </li>
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-graduation-cap"></i><span class="hide-menu">Results</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="email-compose.html"><i class="fa fa-arrow-right"></i> Individual Result</a></li>
                                <li><a href="email-compose.html"><i class="fa fa-arrow-right"></i> Classwise Result</a></li>
                                <li><a href="email-read.html"><i class="fa fa-arrow-right"></i> Marksheet</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-check-circle"></i><span class="hide-menu">Promotion</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="email-compose.html"><i class="fa fa-arrow-right"></i> Individual Promotion</a></li>
                                <li><a href="email-compose.html"><i class="fa fa-arrow-right"></i> Classwise Promotion</a></li>
                            </ul>
                        </li>

                        <li class="nav-label">Employee</li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-user-plus"></i>Add Employee</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-users"></i>Employee List</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-book"></i>Assigned Class</a>
                        </li>
                        <li> <a class="email-compose.html" href="/Institution"><i class="fa fa-money"></i>Salary</a>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">@yield('title')</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                @if($errors->has('message'))
                <div class="col-sm-12" id="success-alert">
                    <div class="alert  alert-success alert-dismissible fade show text-dark" role="alert">
                      <span class="badge badge-pill badge-info">Success</span>
                        {{$errors->first("message")}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @elseif(count($errors)>0)
                    <div class="col-sm-12" id="error-alert">
                        <div class="alert  alert-danger alert-dismissible fade show text-dark" role="alert">
                          <span class="badge badge-pill badge-danger">Error</span>
                            @foreach($errors->all() as $error)
                             {{$error}}
                            @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved. 
                <span class="pull-right"> Developed by <a class="text-primary" href="https://banglasofttech.com">Bangla Soft Tech</a></span></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    

    <!-- Bootstrap tether Core JavaScript -->
    <!-- <script src='{{asset("content/js/popper.min.js")}}'></script> -->
    

    <!-- <script src='{{asset("content/js/lib/datamap/d3.min.js")}}'></script> -->
    <!-- <script src='{{asset("content/js/lib/datamap/topojson.js")}}'></script> -->
    <!-- <script src='{{asset("content/js/lib/datamap/datamaps.world.min.js")}}'></script> -->
    <!-- <script src='{{asset("content/js/lib/datamap/datamap-init.js")}}'></script> -->

    <!-- <script src='{{asset("content/js/lib/weather/jquery.simpleWeather.min.js")}}'></script> -->
    <!-- <script src='{{asset("content/js/lib/weather/weather-init.js")}}'></script> -->
    <!-- <script src='{{asset("content/js/lib/owl-carousel/owl.carousel.min.js")}}'></script> -->
    <!-- <script src='{{asset("content/js/lib/owl-carousel/owl.carousel-init.js")}}'></script> -->


    <!-- <script src='{{asset("content/js/lib/chartist/chartist.min.js")}}'></script> -->
    <!-- <script src='{{asset("content/js/lib/chartist/chartist-plugin-tooltip.min.js")}}'></script> -->
    <!-- <script src='{{asset("content/js/lib/chartist/chartist-init.js")}}'></script> -->

    <!-- <script src="content/js/lib/jquery/jquery.min.js"></script> -->
    <!-- Bootstrap tether Core JavaScript -->
    <script src="content/js/lib/bootstrap/js/popper.min.js"></script>
    <!-- <script src="content/js/lib/bootstrap/js/bootstrap.min.js"></script> -->
    <!-- slimscrollbar scrollbar JavaScript -->
    <!-- <script src="content/js/jquery.slimscroll.js"></script> -->
    <!--Menu sidebar -->
    <!-- <script src="content/js/sidebarmenu.js"></script> -->
    <!--stickey kit -->
    <!-- <script src="content/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script> -->

    <!-- <script src="content/js/scripts.js"></script> -->

    <!-- Number Animation -->
    <!-- <script src="content/js/widgets.js"></script> -->

    
    <!-- JQuery UI -->
    <script src='{{asset("content/js/jquery.min.js")}}'></script>

    <script src='{{asset("content/js/jquery-ui.min.js")}}'></script>

    <!-- Bootstrap JS -->
    <script src='{{asset("content/js/bootstrap.min.js")}}'></script>
    <!-- slimscrollbar scrollbar for side bar -->
    <script src='{{asset("content/js/jquery.slimscroll.js")}}'></script>
    
    <!--show/hide sidebar submenu-->
    <script src='{{asset("content/js/sidebarmenu.js")}}'></script>
    
    <!-- side bar response-->
    <script src='{{asset("content/js/sticky-kit.min.js")}}'></script>

    <!--Custom JavaScript for progressbar and menu -->
    <script src='{{asset("content/js/scripts.js")}}'></script>

    <!-- Number Animation -->
    <script src='{{asset("content/js/widgets.js")}}'></script>

    <!-- Chart -->
    <script src='{{asset("content/js/lib/chart-js/Chart.bundle.js")}}'></script>

    <!-- Monthly Collection  -->
    <script src='{{asset("content/js/lib/chart-js/chartjs-init.js")}}'></script>

    <!-- Custom JS -->
    <script src='{{asset("content/js/main.js")}}'></script>

</body>

</html>
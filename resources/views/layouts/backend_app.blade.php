<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard</title>
    <!-- Favicon icon -->
    <link rel="stylesheet" href="{{ asset('backend_asset') }}/vendor/chartist/css/chartist.min.css">
    <link href="{{ asset('backend_asset') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
        rel="stylesheet">
    <link href="{{ asset('backend_asset') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('backend_asset') }}/css/style.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset("frontend_asset") }}/img/favicon.png">
</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('dashboard') }}" class="brand-logo">
                {{-- <img class="logo-abbr" src="{{ asset('frontend_asset') }}/images/logo.png" alt=""> --}}
                <img class="logo-compact" src="{{ asset('frontend_asset') }}/images/logo.png" alt="">
                <img class="brand-title" src="{{ asset('frontend_asset') }}/images/logo.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->


        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse" style="justify-content: flex-end;">
                        <ul class="navbar-nav header-right">
                            <li class="nav-item">
                                <a target="_blank" href="{{ route('index') }}"  class="btn btn-square btn-outline-info" >View Website</a>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <img src="{{ asset('backend_asset') }}/images/17.jpg" width="20" alt="" />
                                    <div class="header-info">
                                        <span class="text-black"><strong>{{ Auth::user()->name }}</strong></span>
                                        <p class="fs-12 mb-0">Admin</p>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    {{-- <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-381-networking"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="workout-statistic.html">Workout Statistic</a></li>
                            <li><a href="workoutplan.html">Workout Plan</a></li>
                            <li><a href="distance-map.html">Distance Map</a></li>
                            <li><a href="food-menu.html">Diet Food Menu</a></li>
                            <li><a href="personal-record.html">Personal Record</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ route('banner.index') }}" class="ai-icon" aria-expanded="false">
                            <i class="fa fa-list-ol" aria-hidden="true"></i>
                            <span class="nav-text">Banner</span>
                        </a>
                    </li>
                    <li><a href="{{ route('car.index') }}" class="ai-icon" aria-expanded="false">
                            <i class="fa fa-list-ol" aria-hidden="true"></i>
                            <span class="nav-text">Car</span>
                        </a>
                    </li>
                    <li><a href="{{ route('dashboard.contact') }}" class="ai-icon" aria-expanded="false">
                            <i class="fa fa-list-ol" aria-hidden="true"></i>
                            <span class="nav-text">Contact Form</span>
                        </a>
                    </li>
                    <li><a href="{{ route('dashboard.sell.car') }}" class="ai-icon" aria-expanded="false">
                            <i class="fa fa-list-ol" aria-hidden="true"></i>
                            <span class="nav-text">Sell Cars</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
                <div class="row">
                    @yield('backend_content') </div>
            </div>
        </div>
        <!--**********************************
    Content body end
***********************************-->
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="https://futureinltd.com/" target="_blank">Future
                        Innovation LTD</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{ asset('backend_asset') }}/vendor/global/global.min.js"></script>
    <script src="{{ asset('backend_asset') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('backend_asset') }}/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="{{ asset('backend_asset') }}/js/custom.min.js"></script>
    <script src="{{ asset('backend_asset') }}/js/custom.js"></script>
    <script src="{{ asset('backend_asset') }}/js/deznav-init.js"></script>
    <script src="{{ asset('backend_asset') }}/vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Chart piety plugin files -->
    <script src="{{ asset('backend_asset') }}/vendor/peity/jquery.peity.min.js"></script>

    <!-- Apex Chart -->
    <script src="{{ asset('backend_asset') }}/vendor/apexchart/apexchart.js"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('backend_asset') }}/js/dashboard/dashboard-1.js"></script>
</body>

</html>
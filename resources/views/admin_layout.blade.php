<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/back1/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('public/back1/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Trang quản trị hệ thống
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('public/back1/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/back1/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <link href="{{ asset('public/back/css/font-awesome.css') }}" rel="stylesheet">
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('public/back1/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="{{ URL::to('/dashboard') }}" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{ asset('public/back1/img/logo-small.png') }}">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="{{ URL::to('/dashboard') }}" class="simple-text logo-normal">
                    <span>
                    <?php
                    $name = Session::get('admin_name');
                    if ($name) {
                        echo $name;
                    }
                    ?>
                    </span>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="{{ URL::to('/dashboard') }}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Tổng quan</p>
                        </a>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-book"></i>
                            <span>Danh mục sản phẩm</span>
                        </a>
                        <ul style="list-style-type: disc">
                            <li><a href="{{ URL::to('/add-category-product') }}">Thêm danh mục sản phẩm</a></li>
                            <li><a href="{{ URL::to('/show-category-product') }}">Danh sách danh mục sản phẩm</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-info"></i>
                            <span>Thương hiệu sản phẩm</span>
                        </a>
                        <ul style="list-style-type: disc">
                            <li><a href="{{ URL::to('/add-brand-product') }}">Thêm thương hiệu sản phẩm</a></li>
                            <li><a href="{{ URL::to('/show-brand-product') }}">Danh sách thương hiệu sản phẩm</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>
                            <i class="fa fa-product-hunt"></i>
                            <span>Sản phẩm</span>
                        </a>
                        <ul style="list-style-type: disc">
                            <li><a href="{{ URL::to('/add-product') }}">Thêm sản phẩm</a></li>
                            <li><a href="{{ URL::to('/show-product') }}">Danh sách sản phẩm</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Trang quản trị hệ thống</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Tìm kiếm...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">...</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item fa fa-suitcase" href="#">&emsp;Thông tin cá nhân</a>
                                    <a class="dropdown-item fa fa-cog" href="#">&emsp;Cài đặt</a>
                                    <a class="dropdown-item fa fa-key" href="{{ URL::to('/logout') }}">&emsp;Đăng
                                        xuất</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->

            <!--main content start-->

            <div class="content">
                <section id="main-content">
                    <section class="wrapper">
                        @yield('content')
                    </section>
                </section>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('public/back1/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('public/back1/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('public/back1/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/back1/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="{{ asset('public/back1/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('public/back1/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('public/back1/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('public/back1/demo/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
            demo.initChartsPages();
        });
    </script>
</body>

</html>

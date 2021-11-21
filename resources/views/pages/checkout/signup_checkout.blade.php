{{-- @extends('user_layout')
@section('content')
    <div class="container">
        <div class="shoes-grid">
            <a href="single.html">
                <div class="wrap-in">
                    <div class="wmuSlider example1 slide-grid">
            </a>
        </div>
    </div>
    </a>
    <!---->
    <form method="post" action=" {{ URL::to('/add-customer') }}">
        @csrf
        <div class="register-top-grid">
            <h3>Đăng kí tài khoản </h3>
            <div class="mation">
                <span>Họ và tên của bạn <label style="color:red">*</label></span>
                <input type="text" name="customer_name">

                <span>Địa chỉ email <label style="color:red">*</label></span>
                <input type="text" name="customer_email">

                <span>Mật khẩu <label style="color:red">*</label></span>
                <input type="password" name="customer_password"
                    style="width: 85%; outline-color: #FF5B36; border: 1px solid #EEE; 
                                                                            font-size: 0.9em; padding: 0.5em; font-size: 1em; margin: 0.5em 0;">
                <span>Số điện thoại <label style="color:red">*</label></span>
                <input type="text" name="customer_phone">
            </div>

        </div>

        <div class="register-but">
            <input type="submit" value="Đăng ký">
            <div class="clearfix"> </div>
        </div>
    </form>
    <div class="clearfix"></div>
    </div>
@endsection --}}

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng kí</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('public/back2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('public/back2/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo tài khoản!</h1>
                            </div>
                            <form method="post" action=" {{ URL::to('/add-customer') }}" class="user">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="customer_name" class="form-control form-control-user"
                                        placeholder="Họ và tên">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="customer_phone" class="form-control form-control-user"
                                        placeholder="Số điện thoại">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="customer_email" class="form-control form-control-user"
                                        placeholder="Địa chỉ email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="customer_password"
                                        class="form-control form-control-user" placeholder="Mật khẩu">
                                </div>
                                <input type="submit" value="Tạo tài khoản" class="btn btn-primary btn-user btn-block">
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Tạo tài khoản với Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Tạo tài khoản với Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Đã có tài khoản? Đăng nhập ngay!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('public/back2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('public/back2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('public/back2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('public/back2/js/sb-admin-2.min.js') }}"></script>

</body>

</html>

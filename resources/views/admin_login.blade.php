<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trang quản trị - Đăng nhập</title>

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
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9" style="margin-top: 75px">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image" style="height:500px"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng nhập</h1>
                                        <?php
                                        $message = Session::get('message');
                                        if ($message) {
                                            echo '<span class="text-alert">' . $message . '</span>';
                                            Session::put('message', null);
                                        }
                                        ?>
                                    </div>
                                    <form action="{{ URL::to('/admin-dashboard') }}" method="post"
                                        class="user">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" name="admin_email"
                                                class="form-control form-control-user" placeholder="Nhập tài khoản"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="admin_password"
                                                class="form-control form-control-user" placeholder="Nhập mật khẩu"
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Nhớ đăng
                                                    nhập</label>
                                            </div>
                                        </div>
                                        <div>
                                            <input type="submit" value="Đăng nhập"
                                                class="btn btn-primary btn-user btn-block">
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
                                    </div>
                                </div>
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

<!DOCTYPE html>
<html>

<head>
    <title>Arabic ShirtShop</title>
    <link rel="icon" href="{{ asset('public/front/images/favicon.png') }}">
    <link href="{{ asset('public/front/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--theme-style-->
    <link href="{{ asset('public/front/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('public/front/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('public/front/css/etalage.css') }}" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <script src="{{ asset('public/front/js/jquery.min.js') }}"></script>
    <!--script-->
    <script src="{{ asset('public/front/js/jquery.etalage.min.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                source_image_width: 900,
                source_image_height: 1200,
                show_hint: true,
                click_callback: function(image_anchor, instance_id) {
                    alert('Callback example:\nYou clicked on an image with the anchor: "' +
                        image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });

        });
    </script>
</head>

<body>
    <!--header-->
    <div class="header">
        <div class="top-header" style="background-color: #98BAE7">
            <div class="container">
                <div class="top-header-right" style="margin-top: -7px">
                    <?php 
                        $customer_id = Session::get('customer_id');
                        if($customer_id != null) {    
                    ?>
                    <span style="background: #fff; padding: 5px; border: 1px solid #98BAE7; border-radius: 10px;">
                        <a href="{{ URL::to('/logout-checkout') }}" style="text-decoration: none">????ng xu???t</a>
                    </span>
                    <?php
                    }else{
                    ?>
                    <span style="background: #fff; padding: 5px; border: 1px solid #98BAE7; border-radius: 10px;">
                        <a href="{{ URL::to('/login-checkout') }}" style="text-decoration: none">????ng nh???p</a>
                    </span>
                    <?php
                    }
                    ?>

                    <?php 
                        $customer_id = Session::get('customer_id');
                        if($customer_id == null) {  
                    ?>
                    <span
                        style="background: #fff; padding: 5px; border: 1px solid #98BAE7; border-radius: 10px; margin-left: 20px">
                        <a href="{{ URL::to('/signup-checkout') }}" style="text-decoration: none">????ng k??</a>
                    </span>
                    <?php
                    }
                    ?>

                    <!---->
                </div>

            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="header-bottom-left">
                    <div class="logo">
                        <a href="{{ URL::to('/trang-chu') }}"><img
                                src="{{ asset('public/front/images/logo2.png') }}" alt=" " /></a>
                    </div>
                    <div class="search">
                        <form action="{{ URL::to('/tim-kiem') }}" method="post">
                            @csrf
                            <input type="text" name="keywords_search" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = '';}">
                            <input type="submit" name="search_btn" value="T??m ki???m">
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="header-bottom-right">
                    <?php
                        $customer_id = Session::get('customer_id');
                        $shipping_id = Session::get('shipping_id');
                        if($customer_id != null && $shipping_id == null){
                    ?>
                    <div class="account" style="width: 150px; margin-left: 170px;"><a
                            href="{{ URL::to('/checkout') }}"><i class="fa fa-user"
                                style="font-size: 18px; color: #98BAE7">&emsp;Thanh to??n</i></a></div>
                    <?php
                        }elseif($customer_id != null && $shipping_id != null){
                    ?>
                    <div class="account" style="width: 150px; margin-left: 170px;"><a
                            href="{{ URL::to('/payment') }}"><i class="fa fa-user"
                                style="font-size: 18px; color: #98BAE7">&emsp;Thanh to??n</i></a></div>
                    <?php
                        }else{
                    ?>
                    <div class="account" style="width: 150px; margin-left: 170px;"><a
                            href="{{ URL::to('/login-checkout') }}">
                            <i class="fa fa-user" style="font-size: 18px; color: #98BAE7">&emsp;Thanh to??n</i>
                        </a></div>
                    <?php
                        }
                    ?>
                    <div class="cart"><a href="{{ URL::to('/show-cart') }}"><i class="fa fa-shopping-cart"
                                style="font-size: 18px; color: #98BAE7">&emsp;Gi??? h??ng</i></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!---->
    @yield('content')
    <div class="sub-cate">
        <div class=" top-nav rsidebar span_1_of_left">
            <h3 class="cate" style="background-color: #98BAE7">Trang ch???</h3>
            <ul class="menu">
                <ul class="kid-menu ">
                    <li><a href="{{ URL::to('/all-product') }}">S???n ph???m</a></li>
                </ul>
                <li><a href="#" class="active">Tin t???c<img class="arrow-img"
                            src="{{ asset('public/front/images/arrow1.png') }}" alt=""
                            style="float: right; padding-top:20px">
                    </a>
                    <ul class="cute" style="display: block; overflow: hidden;">
                        @foreach ($cate_post as $key => $value)
                            <li class="subitem1"><a
                                    href=" {{ URL::to('/danh-muc-bai-viet/' . $value->cate_post_id) }} ">
                                    {{ $value->cate_post_name }} </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <ul class="kid-menu ">
                    <li><a href="{{ URL::to('/about') }}">Th??ng tin</a></li>
                    <li class="menu-kid-left"><a href="{{ URL::to('/show-cart') }}">Gi??? h??ng</a></li>
                    <li class="menu-kid-left"><a href="{{ URL::to('/contact') }}">Li??n h???</a></li>
                </ul>
            </ul>
        </div>

        <div class=" chain-grid menu-chain">
            <h3 class="cate" style="background-color: #98BAE7">Danh m???c s???n ph???m</h3>
            <ul class="menu">
                @foreach ($category as $key => $cate)
                    <ul class="kid-menu">
                        <li><a
                                href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                        </li>
                    </ul>
                @endforeach
            </ul>
        </div>

        <div class=" chain-grid menu-chain">
            <h3 class="cate" style="background-color: #98BAE7">Th????ng hi???u s???n ph???m</h3>
            <ul class="menu">
                @foreach ($brand as $key => $brand)
                    <ul class="kid-menu">
                        <li><a
                                href="{{ URL::to('/thuong-hieu-san-pham/' . $brand->brand_id) }}">{{ $brand->brand_name }}</a>
                        </li>
                    </ul>
                @endforeach
            </ul>
        </div>
        <a class="view-all all-product" href="{{ URL::to('/all-product') }}">Xem t???t c??? s???n ph???m<span> </span></a>
    </div>
    <div class="clearfix"> </div>
    </div>

    <!--initiate accordion-->
    <script type="text/javascript">
        $(function() {
            var menu_ul = $('.menu > li > ul'),
                menu_a = $('.menu > li > a');
            menu_ul.hide();
            menu_a.click(function(e) {
                e.preventDefault();
                if (!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true, true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true, true).slideUp('normal');
                }
            });

        });
    </script>

    <!-- Messenger Plugin chat Code -->
    <div id="fb-root"></div>

    <!-- Your Plugin chat code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "106475258542182");
        chatbox.setAttribute("attribution", "biz_inbox");

        window.fbAsyncInit = function() {
            FB.init({
                xfbml: true,
                version: 'v12.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!---->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="latter">
                    <h6 style="font-size: 19px; padding-top: 7px ;">Nh???n th??ng b??o t??? ch??ng t??i</h6>
                    <div class="sub-left-right">
                        <form>
                            <input type="text" value="Nh???p email..." onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Enter email here';}" />
                            <input style="background-color: #98BAE7" type="submit" value="????ng k??" />
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="latter-right">
                    <p>Theo d??i ch??ng t??i</p>
                    <ul class="face-in-to">
                        {{-- <li><a href="#"><span> </span></a></li> --}}
                        <li><a href="https://www.facebook.com/Arabic-BikeShop-106475258542182" target="_blank"><span
                                    class="facebook-in" style="border-radius: 50%;"> </span></a></li>
                        <div class="clearfix"> </div>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-cate">
                    <h6>Danh m???c</h6>
                    @foreach ($category as $key => $cate)
                        <ul>
                            <li><a
                                    href="{{ URL::to('/danh-muc-san-pham/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                            </li>
                        </ul>
                    @endforeach
                </div>
                <div class="footer-bottom-cate">
                    <h6>Trang web</h6>
                    <ul>
                        <li><a href="{{ URL::to('/all-product') }}">S???n ph???m</a></li>
                        <li><a href="{{ URL::to('/about') }}">Th??ng tin</a></li>
                        <li><a href="{{ URL::to('/show-cart') }}">Gi??? h??ng</a></li>
                        <li><a href="{{ URL::to('/contact') }}">Li??n h???</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate bottom-grid-cat">
                    <h6 style="cursor: default; color: white;">Th????ng hi???u</h6>
                </div>
                <div class="footer-bottom-cate cate-bottom">
                    <h6>?????a ch???</h6>
                    <ul>
                        <li>Tr?????ng ?????i H???c C??ng Ngh??? Th??ng Tin v?? Truy???n Th??ng Vi???t H??n </li>
                        <li>470 Tr???n ?????i Ngh??a</li>
                        <li>???? N???ng</li>
                        <li>Vi???t Nam</li>
                        <li>Tr??i ?????t</li>
                        <li class="phone">S??? ??i???n tho???i : 0902062052</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>

    {{-- <script src="{{ 'public/front/js/sweetalert2@11.js' }}"></script>
    <script type="text/javascript">
        Swal.fire(
            'The Internet?',
            'That thing is still around?',
            'question'
        )
    </script> --}}
</body>

</html>

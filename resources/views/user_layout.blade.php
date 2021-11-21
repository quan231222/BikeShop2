<!DOCTYPE html>
<html>

<head>
    <title>Arabic ShirtShop</title>
    <link href="{{ asset('public/front/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--theme-style-->
    <link href="{{ asset('public/back/css/font-awesome.css') }}" rel="stylesheet">
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
    <script src="{{ asset('publoc/front/js/jquery.etalage.min.js') }}"></script>
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
        <div class="top-header">
            <div class="container">
                <div class="top-header-right">
                    <?php 
                        $customer_id = Session::get('customer_id');
                        if($customer_id != null) {    
                    ?>
                    <span style="background: #fff; padding: 5px; border: 1px solid #f97e76; border-radius: 10px;">
                        <a href="{{ URL::to('/logout-checkout') }}" style="text-decoration: none">Đăng xuất</a>
                    </span>
                    <?php
                    }else{
                    ?>
                    <span style="background: #fff; padding: 5px; border: 1px solid #f97e76; border-radius: 10px;">
                        <a href="{{ URL::to('/login-checkout') }}" style="text-decoration: none">Đăng nhập</a>
                    </span>
                    <?php
                    }
                    ?>

                    <?php 
                        $customer_id = Session::get('customer_id');
                        if($customer_id == null) {  
                    ?>
                    <span
                        style="background: #fff; padding: 5px; border: 1px solid #f97e76; border-radius: 10px; margin-left: 20px">
                        <a href="{{ URL::to('/signup-checkout') }}" style="text-decoration: none">Đăng kí</a>
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
                                src="{{ asset('public/front/images/logo.png') }}" alt=" " /></a>
                    </div>
                    <div class="search">
                        <form action="{{ URL::to('/tim-kiem') }}" method="post">
                            @csrf
                            <input type="text" name="keywords_search" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = '';}">
                            <input type="submit" name="search_btn" value="Tìm kiếm">
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
                            href="{{ URL::to('/checkout') }}"><span>
                            </span>Thanh toán</a></div>
                    <?php
                        }elseif($customer_id != null && $shipping_id != null){
                    ?>
                    <div class="account" style="width: 150px; margin-left: 170px;"><a
                            href="{{ URL::to('/payment') }}"><span>
                            </span>Thanh toán</a></div>
                    <?php
                        }else{
                    ?>
                    <div class="account" style="width: 150px; margin-left: 170px;"><a
                            href="{{ URL::to('/login-checkout') }}"><span> </span>Thanh toán</a></div>
                    <?php
                        }
                    ?>
                    <div class="cart"><a href="{{ URL::to('/show-cart') }}"><span> </span>Giỏ hàng</a>
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
            <h3 class="cate">Trang chủ</h3>
            <ul class="menu">
                <ul class="kid-menu ">
                    <li><a href="product.html">Sản phẩm</a></li>
                    <li><a href="product.html">Tin tức</a></li>
                    <li><a href="product.html">Thông tin</a></li>
                    <li class="menu-kid-left"><a href="contact.html">Giỏ hàng</a></li>
                    <li class="menu-kid-left"><a href="contact.html">Liên hệ</a></li>
                </ul>
            </ul>
        </div>

        <div class=" chain-grid menu-chain">
            <h3 class="cate">Danh mục sản phẩm</h3>
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
            <h3 class="cate">Thương hiệu sản phẩm</h3>
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
        <a class="view-all all-product" href="product.html">VIEW ALL PRODUCTS<span> </span></a>
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

    <!---->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="latter">
                    <h6>NEWS-LETTER</h6>
                    <div class="sub-left-right">
                        <form>
                            <input type="text" value="Enter email here" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Enter email here';}" />
                            <input type="submit" value="SUBSCRIBE" />
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="latter-right">
                    <p>FOLLOW US</p>
                    <ul class="face-in-to">
                        <li><a href="#"><span> </span></a></li>
                        <li><a href="#"><span class="facebook-in"> </span></a></li>
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
                    <h6>CATEGORIES</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>
                        <li><a href="#">Urna ac tortor sc</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Urna ac tortor sc</a></li>
                        <li><a href="#">Eget nisi laoreet</a></li>
                        <li><a href="#">Faciisis ornare</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate bottom-grid-cat">
                    <h6>FEATURE PROJECTS</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate">
                    <h6>TOP BRANDS</h6>
                    <ul>
                        <li><a href="#">Curabitur sapien</a></li>
                        <li><a href="#">Dignissim purus</a></li>
                        <li><a href="#">Tempus pretium</a></li>
                        <li><a href="#">Dignissim neque</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Ultrices id du</a></li>
                        <li><a href="#">Commodo sit</a></li>
                        <li><a href="#">Urna ac tortor sc</a></li>
                        <li><a href="#">Ornared id aliquet</a></li>
                        <li><a href="#">Urna ac tortor sc</a></li>
                        <li><a href="#">Eget nisi laoreet</a></li>
                        <li><a href="#">Faciisis ornare</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate cate-bottom">
                    <h6>OUR ADDERSS</h6>
                    <ul>
                        <li>Trường Đại Học Công Nghệ Thông Tin và Truyền Thông Việt Hàn </li>
                        <li>470 Trần Đại Nghĩa</li>
                        <li>Đà Nẵng</li>
                        <li>Việt Nam</li>
                        <li>Trái Đất</li>
                        <li class="phone">PH : 0902062052</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</body>

</html>

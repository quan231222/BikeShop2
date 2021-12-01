<!DOCTYPE html>
<html>

<head>
    <title>Arabic ShirtShop</title>
    <link rel="icon" href="{{ asset('public/front/images/favicon.png') }}">
    <link href="{{ asset('public/front/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!--theme-style-->
    <link href="{{ asset('public/front/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('public/front/css/font-awesome.css') }}" rel="stylesheet">
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
                        <a href="{{ URL::to('/logout-checkout') }}" style="text-decoration: none">Đăng xuất</a>
                    </span>
                    <?php
                    }else{
                    ?>
                    <span style="background: #fff; padding: 5px; border: 1px solid #98BAE7; border-radius: 10px;">
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
                        style="background: #fff; padding: 5px; border: 1px solid #98BAE7; border-radius: 10px; margin-left: 20px">
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
                                src="{{ asset('public/front/images/logo2.png') }}" alt=" " /></a>
                        {{-- <a href="{{ URL::to('/trang-chu') }}"><img
                                src="{{ asset('public/front/images/logo2.png') }}" style="height: 35px;"
                                alt=" " /></a> --}}
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
                            href="{{ URL::to('/checkout') }}"><i class="fa fa-user"
                                style="font-size: 18px; color: #98BAE7">&emsp;Thanh toán</i></a></div>
                    <?php
                        }elseif($customer_id != null && $shipping_id != null){
                    ?>
                    <div class="account" style="width: 150px; margin-left: 170px;"><a
                            href="{{ URL::to('/payment') }}"><i class="fa fa-user"
                                style="font-size: 18px; color: #98BAE7">&emsp;Thanh toán</i></a></div>
                    <?php
                        }else{
                    ?>
                    <div class="account" style="width: 150px; margin-left: 170px;"><a
                            href="{{ URL::to('/login-checkout') }}">
                            <i class="fa fa-user" style="font-size: 18px; color: #98BAE7">&emsp;Thanh toán</i>
                        </a></div>
                    <?php
                        }
                    ?>
                    <div class="cart"><a href="{{ URL::to('/show-cart') }}"><i class="fa fa-shopping-cart"
                                style="font-size: 18px; color: #98BAE7">&emsp;Giỏ hàng</i></a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!---->

    <div class="container">

        <div class=" single_top">

            @foreach ($details as $key => $detail)
                <div class="single_grid">
                    <div class="grid images_3_of_2">
                        <ul id="etalage">
                            <li>
                                <a href="optionallink.html">
                                    <img class="etalage_thumb_image"
                                        src="{{ URL::to('public/uploads/product/' . $detail->product_image) }}"
                                        class="img-responsive" />
                                    <img class="etalage_source_image"
                                        src="{{ URL::to('public/uploads/product/' . $detail->product_image) }}"
                                        class="img-responsive" title="" />
                                </a>
                            </li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="desc1 span_3_of_2">


                        <form action="{{ URL::to('/save-cart') }}" method="post">
                            @csrf
                            <div class="cart-b">
                                <div class="left-n ">
                                    <h2>{{ $detail->product_name }}</h2>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="cart-b">
                                <div class="left-n " style="font-size: 20px">Giá:
                                    {{ number_format($detail->product_price) }} đ</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="cart-b">
                                <div class="left-n " style="font-size: 20px">Số lượng: <input
                                        style="width:50px; color: black;" name="qty" type="number" min="1" value="1">
                                </div>
                                <input name="productid_hidden" type="hidden" value="{{ $detail->product_id }}">
                                <div class="clearfix"></div>
                            </div>
                            <div class="cart-b">
                                <div class="left-n " style="font-size: 20px">Màu: {{ $detail->product_color }}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="cart-b">
                                <div class="left-n " style="font-size: 20px">Mô tả sản phẩm:
                                    {!! $detail->product_desc !!}</div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="cart-b">
                                <div class="left-n " style="font-size: 20px">Tình trạng:
                                    @if ($detail->product_status == 1)
                                        Còn hàng
                                    @else
                                        Hết hàng
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="cart-b" style="border-color: white">
                                <button class="now-get get-cart-in" type="submit"
                                    style="width: 150px; height: 37px; background-color: #323a45; color: #fff">
                                    <i class="fa fa-shopping-cart">&emsp;Thêm vào giỏ hàng</i>
                                </button>
                                <div class="clearfix"></div>
                            </div>


                        </form>


                        <div class="share">
                            <h5>Chia sẻ :</h5>
                            <ul class="share_nav">
                                <li><a href="#"><img src="{{ URL::to('public/front/images/facebook.png') }}"
                                            title="facebook"></a></li>
                                <li><a href="#"><img src="{{ URL::to('public/front/images/twitter.png') }}"
                                            title="Twiiter"></a></li>
                                <li><a href="#"><img src="{{ URL::to('public/front/images/rss.png') }}"
                                            title="Rss"></a></li>
                                <li><a href="#"><img src="{{ URL::to('public/front/images/gpluse.png') }}"
                                            title="Google+"></a></li>
                            </ul>
                        </div>


                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="toogle">
                    <h3 class="m_3">Thông tin về sản phẩm</h3>
                    <p class="m_text">{!! $detail->product_content !!}</p>
                </div>

                <div class="toogle">
                    <h3 class="m_3">Đánh giá</h3>
                    <p class="m_text">123tessttt.</p>
                </div>

            @endforeach

            <hr>
            <div class="toogle">
                <h3 class="m_3">Các sản phẩm liên quan</h3>
            </div>
            <ul id="flexiselDemo1">
                @foreach ($relate as $key => $value) {}
                    <li>
                        <img src="{{ URL::to('public/uploads/product/' . $value->product_image) }}" />
                        <div class="grid-flex">
                            <a href="{{ URL::to('/chi-tiet-san-pham/' . $value->product_id) }}"
                                style="font-size: 20px">{{ $value->product_name }}</a>
                            <p>{{ number_format($value->product_price) }} đ</p>
                            <input type="button" style="height: 30px; font-size: 10px; 
                            background-color: #323a45; color: #fff;
                            border-radius: 10px" value="Thêm vào giỏ hàng">
                        </div>
                    </li>
                @endforeach
            </ul>
            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 5000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{ asset('public/front/js/jquery.flexisel.js') }}"></script>


        </div>

        <!---->
        <div class="sub-cate">
            <div class=" top-nav rsidebar span_1_of_left">
                <h3 class="cate" style="background-color: #98BAE7">Trang chủ</h3>
                <ul class="menu">
                    <ul class="kid-menu ">
                        <li><a href="{{ URL::to('/all-product') }}">Sản phẩm</a></li>
                        <li><a href=" product.html">Tin tức</a></li>
                        <li><a href="product.html">Thông tin</a></li>
                        <li class="menu-kid-left"><a href="{{ URL::to('/show-cart') }}">Giỏ hàng</a></li>
                        <li class="menu-kid-left"><a href="contact.html">Liên hệ</a></li>
                    </ul>
                </ul>
            </div>

            <div class=" chain-grid menu-chain">
                <h3 class="cate" style="background-color: #98BAE7">Danh mục sản phẩm</h3>
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
                <h3 class="cate" style="background-color: #98BAE7">Thương hiệu sản phẩm</h3>
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
            <a class="view-all all-product" href="{{ URL::to('/all-product') }}">Xem tất cả sản phẩm<span>
                </span></a>
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
    </div>
    <!---->
    <div class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="latter">
                    <h6 style="font-size: 19px; padding-top: 7px ;">Nhận thông báo từ chúng tôi</h6>
                    <div class="sub-left-right">
                        <form>
                            <input type="text" value="Nhập email..." onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Enter email here';}" />
                            <input style="background-color: #98BAE7" type="submit" value="Đăng kí" />
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="latter-right">
                    <p>Theo dõi chúng tôi</p>
                    <ul class="face-in-to">
                        {{-- <li><a href="#"><span> </span></a></li> --}}
                        <li><a href="#"><span class="facebook-in" style="border-radius: 50%;"> </span></a></li>
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
                    <h6>Danh mục</h6>
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
                        <li><a href="{{ URL::to('/all-product') }}">Sản phẩm</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Thông tin</a></li>
                        <li><a href="#">Giỏ hàng</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="footer-bottom-cate bottom-grid-cat">
                    <h6 style="cursor: default; color: white;">Thương hiệu</h6>
                </div>
                <div class="footer-bottom-cate cate-bottom">
                    <h6>Địa chỉ</h6>
                    <ul>
                        <li>Trường Đại Học Công Nghệ Thông Tin và Truyền Thông Việt Hàn </li>
                        <li>470 Trần Đại Nghĩa</li>
                        <li>Đà Nẵng</li>
                        <li>Việt Nam</li>
                        <li>Trái Đất</li>
                        <li class="phone">Số điện thoại : 0902062052</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</body>

</html>

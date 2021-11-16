<!DOCTYPE html>
<html>
    <head>
        <title>Arabic ShirtShop</title>
        <link href="{{asset('public/front/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
        <!--theme-style-->
        <link href="{{asset('public/front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
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
        <script src="{{asset('public/front/js/jquery.min.js')}}"></script>
        <!--script-->
    </head>
<body>
    <!--header-->
    <div class="header">
        <div class="top-header">
            <div class="container">
                <div class="top-header-left">
                    <ul class="support">
                        <li><a href="#"><label> </label></a></li>
                        <li><a href="#">24x7 live<span class="live"> support</span></a></li>
                    </ul>
                    <ul class="support">
                        <li class="van"><a href="#"><label> </label></a></li>
                        <li><a href="#">Free shipping <span class="live">on order over 500</span></a></li>
                    </ul>
                    <div class="clearfix"> </div>
                </div>
                <div class="top-header-right">
                    <div class="down-top">
                        <select class="in-drop">
                            <option value="English" class="in-of">English</option>
                            <option value="Japanese" class="in-of">Japanese</option>
                            <option value="French" class="in-of">French</option>
                            <option value="German" class="in-of">German</option>
                        </select>
                    </div>
                    <div class="down-top top-down">
                        <select class="in-drop">

                            <option value="Dollar" class="in-of">Dollar</option>
                            <option value="Yen" class="in-of">Yen</option>
                            <option value="Euro" class="in-of">Euro</option>
                        </select>
                    </div>
                    <!---->
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="bottom-header">
            <div class="container">
                <div class="header-bottom-left">
                    <div class="logo">
                        <a href="{{ URL::to('/trang-chu')}}"><img src="{{asset('public/front/images/logo.png')}}" alt=" " /></a>
                    </div>
                    <div class="search">
                        <input type="text" value="" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = '';}">
                        <input type="submit" value="SEARCH">

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="header-bottom-right">
                    <div class="account"><a href="login.html"><span> </span>YOUR ACCOUNT</a></div>
                    <ul class="login">
                        <li><a href="login.html"><span> </span>LOGIN</a></li> |
                        <li><a href="register.html">SIGNUP</a></li>
                    </ul>
                    <div class="cart"><a href="#"><span> </span>CART</a></div>
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
            <h3 class="cate">CATEGORIES</h3>
            <ul class="menu">
                <li class="item1"><a href="#">Curabitur sapien<img class="arrow-img"
                            src="{{asset('public/front/images/arrow1.png')}}" alt="" /> </a>
                    <ul class="cute">
                        <li class="subitem1"><a href="product.html">Cute Kittens </a></li>
                        <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
                        <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
                    </ul>
                </li>
                <li class="item2"><a href="#">Dignissim purus <img class="arrow-img "
                            src="{{asset('public/front/images/arrow1.png')}}" alt="" /></a>
                    <ul class="cute">
                        <li class="subitem1"><a href="product.html">Cute Kittens </a></li>
                        <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
                        <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
                    </ul>
                </li>
                <li class="item3"><a href="#">Ultrices id du<img class="arrow-img img-arrow"
                            src="{{asset('public/front/images/arrow1.png')}}" alt="" /> </a>
                    <ul class="cute">
                        <li class="subitem1"><a href="product.html">Cute Kittens </a></li>
                        <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
                        <li class="subitem3"><a href="product.html">Automatic Fails</a></li>
                    </ul>
                </li>
                <li class="item4"><a href="#">Cras iacaus rhone <img class="arrow-img img-left-arrow"
                            src="{{asset('public/front/images/arrow1.png')}}" alt="" /></a>
                    <ul class="cute">
                        <li class="subitem1"><a href="product.html">Cute Kittens </a></li>
                        <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
                        <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
                    </ul>
                </li>
                <li>
                    <ul class="kid-menu">
                        <li><a href="product.html">Tempus pretium</a></li>
                        <li><a href="product.html">Dignissim neque</a></li>
                        <li><a href="product.html">Ornared id aliquet</a></li>
                    </ul>
                </li>
                <ul class="kid-menu ">
                    <li><a href="product.html">Commodo sit</a></li>
                    <li><a href="product.html">Urna ac tortor sc</a></li>
                    <li><a href="product.html">Ornared id aliquet</a></li>
                    <li><a href="product.html">Urna ac tortor sc</a></li>
                    <li><a href="product.html">Eget nisi laoreet</a></li>
                    <li><a href="product.html">Faciisis ornare</a></li>
                    <li class="menu-kid-left"><a href="contact.html">Contact us</a></li>
                </ul>
            </ul>
        </div>
        
        <div class=" chain-grid menu-chain">
            <a href="single.html"><img class="img-responsive chain" src="{{asset('public/front/images/wat.jpg')}}"
                    alt=" " /></a>
            <div class="grid-chain-bottom chain-watch">
                <span class="actual dolor-left-grid">300$</span>
                <span class="reducedfrom">500$</span>
                <h6><a href="single.html">Lorem ipsum dolor</a></h6>
            </div>
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
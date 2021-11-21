@extends('user_layout')
@section('content')
    <div class="container">
        <div class="shoes-grid">
            <a href="single.html">
                <div class="wrap-in">
                    <div class="wmuSlider example1 slide-grid">
                        <div class="wmuSliderWrapper">
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-matter">
                                    <div class="col-md-5 banner-bag">
                                        <img class="img-responsive " src="{{ 'public/front/images/bag.jpg' }}" alt=" " />
                                    </div>
                                    <div class="col-md-7 banner-off">
                                        <h2>FLAT 50% 0FF</h2>
                                        <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et </p>
                                        <span class="on-get">GET NOW</span>
                                    </div>

                                    <div class="clearfix"> </div>
                                </div>

                            </article>
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-matter">
                                    <div class="col-md-5 banner-bag">
                                        <img class="img-responsive " src="{{ 'public/front/images/bag1.jpg' }}" alt=" " />
                                    </div>
                                    <div class="col-md-7 banner-off">
                                        <h2>FLAT 50% 0FF</h2>
                                        <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et </p>
                                        <span class="on-get">GET NOW</span>
                                    </div>

                                    <div class="clearfix"> </div>
                                </div>

                            </article>
                            <article style="position: absolute; width: 100%; opacity: 0;">
                                <div class="banner-matter">
                                    <div class="col-md-5 banner-bag">
                                        <img class="img-responsive " src="{{ 'public/front/images/bag.jpg' }}" alt=" " />
                                    </div>
                                    <div class="col-md-7 banner-off">
                                        <h2>FLAT 50% 0FF</h2>
                                        <label>FOR ALL PURCHASE <b>VALUE</b></label>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et </p>
                                        <span class="on-get">GET NOW</span>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </article>
                        </div>
            </a>
            <ul class="wmuSliderPagination">
                <li><a href="#" class="">0</a></li>
                <li><a href="#" class="">1</a></li>
                <li><a href="#" class="">2</a></li>
            </ul>
            <script src="{{ 'public/front/js/jquery.wmuSlider.js' }}"></script>
            <script>
                $('.example1').wmuSlider();
            </script>
        </div>
    </div>
    </a>
    <!---->
    <div class="shoes-grid-left">
        <a href="single.html">
            <div class="col-md-6 con-sed-grid">

                <div class=" elit-grid">

                    <h4>consectetur elit</h4>
                    <label>FOR ALL PURCHASE VALUE</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                    <span class="on-get">GET NOW</span>
                </div>
                <img class="img-responsive shoe-left" src="{{ 'public/front/images/sh.jpg' }}" alt=" " />

                <div class="clearfix"> </div>

            </div>
        </a>
        <a href="single.html">
            <div class="col-md-6 con-sed-grid sed-left-top">
                <div class=" elit-grid">
                    <h4>consectetur elit</h4>
                    <label>FOR ALL PURCHASE VALUE</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, </p>
                    <span class="on-get">GET NOW</span>
                </div>
                <img class="img-responsive shoe-left" src="{{ 'public/front/images/wa.jpg' }}" alt=" " />

                <div class="clearfix"> </div>
            </div>
        </a>
    </div>
    <div class="products">
        <h5 class="latest-product">Sản phẩm mới nhất</h5>
        <a class="view-all" href="product.html">Hiển thị tất cả<span> </span></a>
    </div>
    <div class="product-left">

        @foreach ($all_product as $key => $product)
            <div class="col-md-3" style="border: 1px solid #ddd; border-radius:10px; margin: 33px">
                <a href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}"><img class="img-responsive chain"
                        src="{{ URL::to('public/uploads/product/' . $product->product_image) }}" alt=" " /></a>
                <span class="star"> </span>
                <div class="grid-chain-bottom">
                    <h6><a
                            href="{{ URL::to('/chi-tiet-san-pham/' . $product->product_id) }}">{{ $product->product_name }}</a>
                    </h6>
                    <div class="star-price">
                        <div class="dolor-grid">
                            <span class="actual">{{ number_format($product->product_price) }} đ</span>
                        </div>
                        <a class="now-get get-cart" style="margin-top: 20px; font-size: 12px;" href="#">Thêm vào giỏ
                            hàng</a>

                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="grid-chain-bottom" style="font-size: 12px">
                    <li style="display: inline;" type="none"><a href=""><i class="fa fa-plus-square"></i> Yêu thích</a></li>
                    <li style="display: inline; float: right" type="none"><a href=""><i class="fa fa-plus-square"></i> So
                            sánh</a></li>
                </div>
            </div>
        @endforeach


        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
    </div>
@endsection

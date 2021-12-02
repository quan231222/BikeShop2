@extends('user_layout')
@section('content')
    <div class="container">
        <div class="shoes-grid">
            <a href="single.html">
                <div class="wrap-in">
                    <div class="wmuSlider example1 slide-grid" style="display: none;">
            </a>
        </div>
    </div>
    </a>
    <!---->
    <ol class="breadcrumb" style="margin-top:29px">
        <li><a href="{{ URL::to('/trang-chu') }}">Trang chủ</a></li>
        <li class="active">Sản phẩm</li>
    </ol>
    <div class="products">
        <h5 class="latest-product">Tất cả sản phẩm</h5>
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
                        {{-- <a class="now-get get-cart" style="margin-top: 20px; font-size: 12px;" href="#">Thêm vào giỏ
                            hàng</a> --}}
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="grid-chain-bottom" style="font-size: 12px">

                </div>
            </div>
        @endforeach

        <div class="clearfix"> </div>
        {{ $all_product->links() }}
    </div>
    <div class="clearfix"></div>
    </div>
@endsection

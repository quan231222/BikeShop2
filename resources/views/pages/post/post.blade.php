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
        <li class="active">Tin tức</li>
    </ol>
    <div class="products">
        <h5 class="latest-product">{{ $post_name }}</h5>
    </div>
    <div class="product-left">

        @foreach ($post as $key => $value)
            <div class="col-md-12" style="border: 1px solid #ddd; border-radius:10px; margin: 33px; padding-top: 20px">
                {!! $value->post_content !!}

            </div>
        @endforeach

        <div class="clearfix"> </div>

    </div>
    <div class="products">
        <h5 class="latest-product">Bài viết liên quan</h5>
    </div>
    <div class="product-left">

        @foreach ($related as $key => $value2)
            <div class="col-md-12" style="border: 1px solid #ddd; border-radius:10px; margin: 5px; ">
                <li><a href="{{ URL::to('/bai-viet/' . $value2->post_id) }}"
                        style="text-decoration: none">{{ $value2->post_title }}</a></li>
            </div>
        @endforeach

        <div class="clearfix"> </div>

    </div>
    <div class="clearfix"></div>
    </div>
@endsection

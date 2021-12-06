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
        <li class="active">{{ $cate_post_name }}</li>
    </ol>
    <div class="products">
        <h5 class="latest-product">{{ $cate_post_name }}</h5>
    </div>
    <div class="product-left">

        @foreach ($post as $key => $value)
            <div class="col-md-12" style="border: 1px solid #ddd; border-radius:10px; margin: 33px">
                <div class="star-price">
                    <div class="dolor-grid">
                        <span class="actual">
                            <a href="{{ URL::to('/bai-viet/' . $value->post_id) }}" style="text-decoration: none;">
                                <h2>{{ $value->post_title }}</h2>
                            </a>
                        </span>
                    </div>
                </div>
                <a href="{{ URL::to('/bai-viet/' . $value->post_id) }}"><img class="img-responsive chain"
                        src="{{ URL::to('public/uploads/post/' . $value->post_image) }}" alt=" "
                        style="float: left; padding: 5px; margin-right: 10px" /></a>
                <span class="actual">
                    {!! $value->post_desc !!}
                </span>
                <span class="star"> </span>

                <div class="star-price">
                    <a class="now-get get-cart" style="margin-top: 20px; font-size: 12px;"
                        href="{{ URL::to('/bai-viet/' . $value->post_id) }}">Xem bài viết</a>
                    <div class="clearfix"> </div>
                </div>


            </div>
        @endforeach

        <div class="clearfix"> </div>
        {{ $post->links() }}
    </div>
    <div class="clearfix"></div>
    </div>
@endsection

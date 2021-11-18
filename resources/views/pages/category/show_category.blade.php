@extends('user_layout')
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
    <div class="products">
        @foreach($category_name as $key => $name)
        <h5 class="latest-product">{{ $name->category_name }}</h5>
        @endforeach
    </div>
    <div class="product-left">
        @foreach ($category_by_id as $key => $product)
        <div class="col-md-3" style="border: 1px solid #ddd; border-radius:10px; margin: 33px">
            <a href="{{ URL::to('/chi-tiet-san-pham/'.$product->product_id) }}"><img class="img-responsive chain" src="{{ URL::to('public/uploads/product/'.$product->product_image) }}"
                    alt=" " /></a>
            <span class="star"> </span>
            <div class="grid-chain-bottom">
                <h6><a href="{{ URL::to('/chi-tiet-san-pham/'.$product->product_id) }}">{{$product->product_name}}</a></h6>
                <div class="star-price">
                    <div class="dolor-grid">
                        <span class="actual">{{number_format($product->product_price)}} đ</span>
                        <span class="rating">
                            <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1">
                            <label for="rating-input-1-5" class="rating-star1"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1">
                            <label for="rating-input-1-4" class="rating-star1"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1">
                            <label for="rating-input-1-3" class="rating-star"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1">
                            <label for="rating-input-1-2" class="rating-star"> </label>
                            <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1">
                            <label for="rating-input-1-1" class="rating-star"> </label>
                        </span>
                    </div>
                    <a class="now-get get-cart" href="#">Thêm vào giỏ hàng</a>           
                    
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="grid-chain-bottom" style="font-size: 15px">
                <li style="display: inline;" type="none"><a href=""><i class="fa fa-plus-square"></i>&nbsp;Yêu thích</a></li>&nbsp;&nbsp;
                <li style="display: inline;" type="none"><a href=""><i class="fa fa-plus-square"></i>&nbsp;So sánh</a></li>
            </div>
        </div>
        @endforeach
    

        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"></div>
    </div>
@endsection


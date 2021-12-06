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
        <li class="active">Thông tin</li>
    </ol>
    <h1>Đây là thông tin của chúng tôi</h1>
    <div class="clearfix"></div>
    </div>
@endsection

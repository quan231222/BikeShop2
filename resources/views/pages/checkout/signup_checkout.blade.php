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
        <form method="post" action=" {{ URL::to('/add-customer') }}"> 
        @csrf
        <div class="register-top-grid">
            <h3>Đăng kí tài khoản </h3>
            <div class="mation">
                <span>Họ và tên của bạn  <label style="color:red">*</label></span>
                    <input type="text" name="customer_name"> 
             
                <span>Địa chỉ email  <label style="color:red">*</label></span>
                    <input type="text" name="customer_email"> 

                <span>Mật khẩu  <label style="color:red">*</label></span>
                    <input type="password" name="customer_password" 
                            style="width: 85%; outline-color: #FF5B36; border: 1px solid #EEE; 
                                    font-size: 0.9em; padding: 0.5em; font-size: 1em; margin: 0.5em 0;">
                <span>Số điện thoại <label style="color:red">*</label></span>
                    <input type="text" name="customer_phone">
            </div>
            {{-- <div class="clearfix"> </div> --}}
            </div>
        {{-- <div class="clearfix"> </div> --}}
        <div class="register-but">
               <input type="submit" value="Đăng ký">
               <div class="clearfix"> </div>
        </div>
    </form>
    <div class="clearfix"></div>
    </div>
@endsection


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
        <div class=" login-right">
           <h3>Đăng nhập</h3>
         <form action="{{ URL::to('login-customer') }}" method="post">
           @csrf
           <div>
             <span>Tài khoản  <label style="color:red">*</label></span>
             <input name="user_account" type="text"> 
           </div>
           <div>
             <span>Mật khẩu  <label style="color:red">*</label></span>
             <input style="width: 96%; outline-color: #fb4d01; border: 1px solid #DDDBDB; font-size: 0.9em; padding: 10px;" 
                    name="password_account" type="password"> 
           </div>
           <span style="float: left">
            <input type="checkbox">
            Ghi nhớ đăng nhập
        </span>
           <div style="float: right">
               <a class="forgot" style="margin-right: 30px" href="#">Quên mật khẩu?</a>
               <input type="submit" value="Đăng nhập" style="margin-right: 50px">
           </div>
         </form>
        </div>	
        <br><br><br><br>
         <div class=" login-left">
            <h3>Đăng kí tài khoản ngay</h3>
          <p>Bằng cách tạo tài khoản với cửa hàng của chúng tôi, bạn sẽ có thể thực hiện quy trình thanh toán nhanh hơn, lưu trữ nhiều địa chỉ giao hàng, xem và theo dõi đơn đặt hàng trong tài khoản của bạn và hơn thế nữa.</p>
          <a class="acount-btn" href="{{ URL::to('/signup-checkout') }}">Tạo tài khoản ngay</a>
        </div>
        <div class="clearfix"> </div>
    <div class="clearfix"></div>
    </div>
@endsection


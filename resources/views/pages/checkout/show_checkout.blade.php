@extends('user_layout')
@section('content')
    <div class="container">
        <div class="shoes-grid">
            <a href="single.html">
                <div class="wrap-in">
                    <div class="wmuSlider example1 slide-grid" style="display: none">
            </a>
        </div>
    </div>
    </a>
    <!---->
    <div class=" login-right">
        <h3>Bạn vui lòng đăng nhập hoặc đăng kí nếu chưa có tài khoản để được thanh toán đơn hàng hoặc có thể xem lịch sử đơn hàng</h3>
    <form action="{{ URL::to('save-checkout-customer') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div style="margin-left: 160px">
                  <span>Email  <label style="color:red">*</label></span>
                  <input name="shipping_email" type="text" style="width:500px" placeholder="Email">
                </div>
                <div style="margin-left: 160px">
                    <span>Họ và tên <label style="color:red">*</label></span>
                    <input name="shipping_name" type="text" style="width:500px" placeholder="Họ và tên">
                </div>
                <div style="margin-left: 160px">
                  <span>Địa chỉ  <label style="color:red">*</label></span>
                  <input name="shipping_address" type="text" style="width:500px" placeholder="Địa chỉ">
                </div>
                <div style="margin-left: 160px">
                    <span>Số điện thoại <label style="color:red">*</label></span>
                    <input name="shipping_phone" type="text" style="width:500px" placeholder="Số điện thoại">
                </div>
                <div style="margin-left: 160px">
                    <span>Ghi chú đơn hàng của bạn  <label style="color:red">*</label></span>
                    <textarea name="shipping_notes" style="resize:none; " cols="65" rows="10"
                            placeholder="Cho chúng tôi biết các yêu cầu của bạn về hàng, đóng gói, vận chuyển,...."></textarea>
                </div>
                <div>
                    <input name="send_order" type="submit" value="Gửi" class="btn btn-primary" style="float: right; margin-right: 170px">
                </div>
            </div>
        </div>
    </form>

        
        <div class="row">
            <h3>Xem lại giỏ hàng của bạn</h3>
        </div>
      
     </div>	

     <div class="clearfix"> </div>

    <div class="clearfix"></div>
    </div>
@endsection
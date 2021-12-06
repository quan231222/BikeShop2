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
        <li class="active">Liên hệ</li>
    </ol>
    <div class="main">
        <div class="reservation_top">
            <div class=" contact_right">
                <h3>Liên hệ với chúng tôi</h3>
                <div class="contact-form">
                    <form method="post" action="contact-post.html">
                        <input type="text" class="textbox" value="Tên" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Name';}">
                        <input type="text" class="textbox" value="Địa chỉ email" onfocus="this.value = '';"
                            onblur="if (this.value == '') {this.value = 'Email';}">
                        <textarea value="Message" onfocus="this.value= '';"
                            onblur="if (this.value == '') {this.value = 'Message';}">Đôi lời muốn nói với chúng tôi</textarea>
                        <input type="submit" value="Gửi">
                        <div class="clearfix"> </div>
                    </form>
                    <address class="address">
                        <p>470 Trần Đại Nghĩa <br> Quận Ngũ Hành Sơn Thành phố Đà Nẵng</p>
                        <dl>
                            <dt> </dt>
                            <dd>Số điện thoại:<span> 0902062052</span></dd>

                            <dd>E-mail:&nbsp; tnqquan.20it1@vku.udn.vn</dd>
                        </dl>
                    </address>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    </div>
@endsection

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
        <h3>Xem lại giỏ hàng của bạn</h3>
    </div>	
    <div class="container">
        <div>
            <?php
            $content = Cart::content();
            ?>
            <table class="table" style="width: 800px">
                <thead>
                    <tr>
                        <td scope="col">Hình ảnh</td>
                        <td scope="col">Mô tả</td>
                        <td scope="col">Giá</td>
                        <td scope="col">Số lượng</td>
                        <td scope="col">Tổng tiền</td>
                        <td scope="col"></td>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($content as $v_content)
                    <tr>
                        <td>
                            <a href=""><img src="{{ URL::to('public/uploads/product/'.$v_content->options->image) }}" width="100px" alt=""></a>
                        </td>
                        <td>
                            <h4><a href="">{{ $v_content->name }}</a></h4>
                            <p>Web ID: 1089772</p>
                        </td>
                        <td>
                            <p>{{ number_format($v_content->price, 0 , ',', '.'). ' đ'}}</p>
                        </td>
                        <td>
                            <div>
                                <form method="post" action="{{ URL::to('update-cart-qty') }}">
                                    @csrf
                                    <input type="number" name="cart_qty" value="{{ $v_content->qty }}" size="2" style="width:40px">
                                    <input type="hidden" name="rowId_cart" value="{{ $v_content->rowId}}">
                                    <input type="submit" name="update_qty" value="Cập nhật" class="btn btn-default btn-sm">
                                </form>
                            </div>
                        </td>
                        <td>
                            <p>
                                <?php
                                    $subtotal = $v_content->price * $v_content->qty;
                                    echo number_format($subtotal). ' đ';
                                ?>    
                            </p>
                        </td>
                        <td>
                            <a href="{{ URL::to('/delete-pro-in-cart/'.$v_content->rowId) }}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

     
    <h3>Mời bạn chọn phương thức thanh toán</h3>
    <form action="{{ URL::to('/order-save') }}" method="post">
        @csrf
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_option" value="1">
            <label class="form-check-label">
                Thanh toán khi nhận hàng
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_option" value="2">
            <label class="form-check-label">
                Thanh toán qua ví điện tử
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="payment_option" value="3">
            <label class="form-check-label">
                Thanh toán qua thẻ ngân hàng
            </label>
        </div>
        <input type="submit" value="Đặt hàng" name="send_order_save" class="btn btn-primary" >
    </form>

     <div class="clearfix"> </div>

    <div class="clearfix"></div>
    </div>
@endsection
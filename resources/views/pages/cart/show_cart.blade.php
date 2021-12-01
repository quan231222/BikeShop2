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
    <ol class="breadcrumb" style="margin-top:29px">
        <li><a href="{{ URL::to('/trang-chu') }}">Trang chủ</a></li>
        <li class="active">Giỏ hàng</li>
    </ol>
    <div class="product-left">
        <div class="container" style="margin-top: 50px">
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success" style="width: 800px">
                        {!! session()->get('message') !!}
                    </div>
                @elseif(session()->has('error'))
                    <div class="alert alert-danger" style="width: 800px">
                        {!! session()->get('error') !!}
                    </div>
                @endif
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
                                    <a href=""><img
                                            src="{{ URL::to('public/uploads/product/' . $v_content->options->image) }}"
                                            width="100px" alt=""></a>
                                </td>
                                <td>
                                    <p>{{ $v_content->name }}</p>
                                </td>
                                <td>
                                    <p>{{ number_format($v_content->price, 0, ',', '.') . ' đ' }}</p>
                                </td>
                                <td>
                                    <div>
                                        <form method="post" action="{{ URL::to('update-cart-qty') }}">
                                            @csrf
                                            <input type="number" name="cart_qty" value="{{ $v_content->qty }}" size="2"
                                                style="width:40px">
                                            <input type="hidden" name="rowId_cart" value="{{ $v_content->rowId }}">
                                            <input type="submit" name="update_qty" value="Cập nhật"
                                                class="btn btn-default btn-sm">
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <p>
                                        <?php
                                        $subtotal = $v_content->price * $v_content->qty;
                                        echo number_format($subtotal, 0, ',', '.') . ' đ';
                                        ?>
                                    </p>
                                </td>
                                <td>
                                    <a href="{{ URL::to('/delete-pro-in-cart/' . $v_content->rowId) }}"><i
                                            class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>

        <hr>
        <hr>
        <hr>

        <div class="container" style="width: 800px;">
            <div class="row">
                <div class="col-sm-12" style="border: 1px solid; padding: 20px">
                    <div>
                        <ul>
                            <li style="padding: 10px; background-color: #E6E4DF; margin-bottom: 10px">Tổng
                                <span>{{ Cart::priceTotal(0, ',', '.') . ' đ' }}</span>
                            </li>
                            {{-- <li style="padding: 10px; background-color: #E6E4DF; margin-bottom: 10px">Mã giảm giá
                                <span>
                                    @if (Session::get('coupon'))
                                        @foreach (Session::get('coupon') as $key => $value)
                                            @if ($value['coupon_type'] == 1)
                                                Mã giảm cho bạn: {{ $value['coupon_value'] }} %
                                                @php
                                                    $total = Cart::priceTotal();
                                                    $total_coupon = $total - ($total * $value['coupon_value']) / 100;
                                                @endphp
                                                <p>
                            <li>Tổng đã giảm: {{ number_format($total - $total_coupon, 0, ',', '.') }} đ</li>
                            </p>
                        @elseif($value['coupon_type'] == 2)
                            Mã giảm cho bạn: {{ number_format($value['coupon_value'], 0, ',', '.') }} k
                            @php
                                $total = Cart::priceTotal();
                                $total_coupon = $total - $value['coupon_value'];
                            @endphp
                            <p>
                                <li>Tổng đã giảm: {{ number_format($total_coupon, 0, ',', '.') }} đ</li>
                            </p>
                            @endif
                            @endforeach
                            @endif
                            </span>
                            </li> --}}
                            <li style="padding: 10px; background-color: #E6E4DF; margin-bottom: 10px">Thuế
                                <span>{{ Cart::tax(0, ',', '.') . ' đ' }}</span>
                            </li>
                            <li style="padding: 10px; background-color: #E6E4DF; margin-bottom: 10px">Phí vận chuyển
                                <span>Free</span>
                            </li>
                            <li style="padding: 10px; background-color: #E6E4DF">Total
                                <span>{{ Cart::total(0, ',', '.') . ' đ' }}</span>
                            </li>
                        </ul>
                        <div style="float: right">
                            <form action="{{ URL::to('/check-coupon') }}" method="POST">
                                @csrf
                                <input type="text" name="coupon" class="btn btn-default update"
                                    placeholder="Nhập mã giảm giá">
                                <input type="submit" value="Kiểm tra mã giảm giá" name="check_coupon"
                                    class="btn btn-default update">
                                {{-- <a class="btn btn-default update" href="" style="margin-right: 20px">Mã giảm giá</a> --}}
                            </form>
                            <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id != null) {
                            
                            ?>
                            <a class="btn btn-default check_out" href="{{ URL::to('/checkout') }}"
                                style="float: right; margin-top: 10px">Thanh toán</a>
                            <?php
                            }else{
                            ?>
                            <a class="btn btn-default check_out" href="{{ URL::to('/login-checkout') }}"
                                style="float: right; margin-top: 10px">Thanh toán</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"></div>
    </div>
@endsection

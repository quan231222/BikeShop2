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

    <div class="product-left">
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

        <hr><hr><hr>

        <div class="container" style="width: 800px;">
            {{-- <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div> --}}
            <div class="row">
                {{-- <div class="col-sm-12" style="border: 1px solid; margin-bottom: 10px">
                    <div style="padding: 20px">
                        <ul>
                            <li>
                                <input type="checkbox">
                                <label>Use Coupon Code</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Use Gift Voucher</label>
                            </li>
                            <li>
                                <input type="checkbox">
                                <label>Estimate Shipping & Taxes</label>
                            </li>
                        </ul>
                        <ul>
                            <li style="float: left; margin-right:5px">
                                <label>Country:</label>
                                <select>
                                    <option>United States</option>
                                    <option>Bangladesh</option>
                                    <option>UK</option>
                                    <option>India</option>
                                    <option>Pakistan</option>
                                    <option>Ucrane</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                                
                            </li>
                            <li style="float: left">
                                <label>Region / State:</label>
                                <select>
                                    <option>Select</option>
                                    <option>Dhaka</option>
                                    <option>London</option>
                                    <option>Dillih</option>
                                    <option>Lahore</option>
                                    <option>Alaska</option>
                                    <option>Canada</option>
                                    <option>Dubai</option>
                                </select>
                            
                            </li>
                        </ul>
                        <hr>
                        <a class="btn btn-default update" href="">Get Quotes</a>
                        <a class="btn btn-default check_out" href="">Continue</a>
                    </div>
                </div> --}}
                <div class="col-sm-12" style="border: 1px solid; padding: 20px">
                    <div>
                        <ul>
                            <li style="padding: 10px; background-color: #E6E4DF; margin-bottom: 10px">Tổng <span>{{ Cart::priceTotal(0, ',', '.'). ' đ' }}</span></li>
                            <li style="padding: 10px; background-color: #E6E4DF; margin-bottom: 10px">Thuế <span>{{ Cart::tax(0, ',', '.'). ' đ' }}</span></li>
                            <li style="padding: 10px; background-color: #E6E4DF; margin-bottom: 10px">Phí vận chuyển <span>Free</span></li>
                            <li style="padding: 10px; background-color: #E6E4DF">Total <span>{{ Cart::total(0, ',', '.'). ' đ' }}</span></li>
                        </ul>
                            {{-- <a class="btn btn-default update" href="">Update</a> --}}
                            <?php 
                            $customer_id = Session::get('customer_id');
                            if($customer_id != null) {
                                
                        ?>
                            <a class="btn btn-default check_out" href="{{ URL::to('/checkout') }}">Thanh toán</a>
                        <?php
                        }else{
                        ?>
                            <a class="btn btn-default check_out" href="{{ URL::to('/login-checkout') }}">Thanh toán</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"></div>
    </div>
@endsection


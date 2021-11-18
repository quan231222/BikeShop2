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
                <table class="table" style="width: 800px">
                    <thead>
                        <tr>
                            <td scope="col">Item</td>
                            <td scope="col"></td>
                            <td scope="col">Price</td>
                            <td scope="col">Quantity</td>
                            <td scope="col">Total</td>
                            <td scope="col"></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href=""><img src="{{URL::to('public/cart/images/cart/one.png')}}" alt=""></a>
                            </td>
                            <td>
                                <h4><a href="">Colorblock Scuba</a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td>
                                <p>$59</p>
                            </td>
                            <td>
                                <div>
                                    <a href=""> + </a>
                                    <input type="text" name="quantity" value="1" autocomplete="off" size="2">
                                    <a href=""> - </a>
                                </div>
                            </td>
                            <td>
                                <p>$59</p>
                            </td>
                            <td>
                                <a href=""><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <hr><hr><hr>

        <div class="container" style="width: 800px">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-12" style="border: 1px solid; margin-bottom: 10px">
                    <div>
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
                </div>
                <div class="col-sm-12" style="border: 1px solid">
                    <div>
                        <ul>
                            <li style="background-color: #E6E4DF; margin-bottom: 10px">Cart Sub Total <span>$59</span></li>
                            <li style="background-color: #E6E4DF; margin-bottom: 10px">Eco Tax <span>$2</span></li>
                            <li style="background-color: #E6E4DF; margin-bottom: 10px">Shipping Cost <span>Free</span></li>
                            <li style="background-color: #E6E4DF">Total <span>$61</span></li>
                        </ul>
                            <a class="btn btn-default update" href="">Update</a>
                            <a class="btn btn-default check_out" href="">Check Out</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"></div>
    </div>
@endsection


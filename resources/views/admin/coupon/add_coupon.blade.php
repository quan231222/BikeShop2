@extends('admin_layout')
@section('content')
    <div class="content">
        <?php
        $message = Session::get('message');
        if ($message) {
            echo '<span style="color: red; font-weight: bold; font-size: 20px;" class="text-alert">' . $message . '</span>';
            Session::put('message', null);
        }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title" style="text-align: center">Thêm mã giảm giá</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ URL::to('/insert-coupon') }}" method="post">
                            @csrf
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Tên mã giảm giá </label>
                                        <input type="text" name="coupon_name" class="form-control"
                                            placeholder="Tên mã giảm giá">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Mã giảm giá</label>
                                        <input type="text" name="coupon_code" class="form-control"
                                            placeholder="Mã giảm giá">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Số lượng mã giảm giá</label>
                                        <input type="text" name="coupon_qty" class="form-control"
                                            placeholder="Số lượng mã giảm giá">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Loại mã giảm giá</label>
                                        <select name="coupon_type" class="form-control input-sm m-bot15">
                                            <option value="0" selected="selected">Chọn</option>
                                            <option value="1">Giảm theo phần trăm</option>
                                            <option value="2">Giảm theo tiền</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Nhập số phần trăm (%) hoặc số tiền giảm</label>
                                        <input type="text" name="coupon_value" class="form-control"
                                            placeholder="Giá trị của mã giảm giá">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" name="add_coupon" class="btn btn-primary btn-round">Thêm
                                        mã giảm giá</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

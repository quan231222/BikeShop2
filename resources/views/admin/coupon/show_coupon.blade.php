@extends('admin_layout')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4"></p>
        <?php
        $message = Session::get('message');
        if ($message) {
            echo '<span style="color: red; font-weight: bold; font-size: 20px;" class="text-alert">' . $message . '</span>';
            Session::put('message', null);
        }
        ?>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách mã giảm giá</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="overflow: hidden;">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                                    role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                    <thead style="text-align: center">
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">
                                                Tên mã giảm giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 250px;">Mã giảm giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending">Số
                                                lượng mã giảm giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending">Loại mã
                                                giảm giá</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending">Giá trị
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending">Thao tác
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot style="text-align: center">
                                        <tr>
                                            <th rowspan="1" colspan="1">Tên mã giảm giá</th>
                                            <th rowspan="1" colspan="1">Mã giảm giá</th>
                                            <th rowspan="1" colspan="1">Số lượng mã giảm giá</th>
                                            <th rowspan="1" colspan="1">Loại mã giảm giá</th>
                                            <th rowspan="1" colspan="1">Giá trị</th>
                                            <th rowspan="1" colspan="1" style="text-align:center;">Thao tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody style="text-align:center">
                                        @foreach ($coupon as $key => $value)
                                            <tr>
                                                <td>{{ $value->coupon_name }}</td>
                                                <td>{{ $value->coupon_code }}</td>
                                                <td>{{ $value->coupon_qty }}</td>
                                                <td>
                                                    <span>
                                                        <?php
                                                            if($value->coupon_type == 1) {
                                                        ?>
                                                        Giảm theo phần trăm
                                                        </a>
                                                        <?php 
                                                        } else {
                                                        ?>
                                                        Giảm theo tiền
                                                        <?php
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span>
                                                        <?php
                                                            if($value->coupon_type == 1) {
                                                        ?>
                                                        Giảm {{ number_format($value->coupon_value, 0, ',', '.') }} %
                                                        </a>
                                                        <?php 
                                                        } else {
                                                        ?>
                                                        Giảm {{ number_format($value->coupon_value, 0, ',', '.') }} đ
                                                        <?php
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <a onclick="return confirm('Bạn chắc chắn là muốn xoá mã giảm giá này chứ?')"
                                                        href="{{ URL::to('/delete-coupon/' . $value->coupon_id) }}">
                                                        <i class="fas fa-times" style="font-size:20px; color: red;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

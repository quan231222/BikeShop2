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
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh sách đơn hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th style="width:20px;">
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox"><i></i>
                                            </label>
                                        </th>
                                        <th>Tên người đặt</th>
                                        <th>Tổng giá tiền</th>
                                        <th>Tình trạng</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_order as $key => $order)
                                        <tr>
                                            <th style="width:20px;">
                                                <label class="i-checks m-b-none">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                            </th>
                                            <td> {{ $order->customer_name }} </td>
                                            <td> {{ $order->order_total }} </td>
                                            <td> {{ $order->order_status }} </td>
                                            <td>
                                                <a href="{{ URL::to('/view-order/' . $order->order_id) }}"
                                                    class="active styling-edit" ui-toggle-class="">
                                                    <i class="fa fa-pencil-square-o text-success text-active"></i>
                                                </a>
                                                <a onclick="return confirm('Bạn chắc chắn là muốn xoá đơn hàng này chứ?')"
                                                    href="{{ URL::to('/delete-order/' . $order->order_id) }}"
                                                    class="active styling-edit" ui-toggle-class="">
                                                    <i class="fa fa-times text-danger text"></i>
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
                <h6 class="m-0 font-weight-bold text-primary">Danh sách đơn hàng</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
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
                                                Tên người đặt</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 250px;">Tổng giá tiền</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 250px;">Tình trạng</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 250px;">Thao tác
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot style="text-align: center">
                                        <tr>
                                            <th rowspan="1" colspan="1">Tên người đặt</th>
                                            <th rowspan="1" colspan="1">Tổng giá tiền</th>
                                            <th rowspan="1" colspan="1">Tình trạng</th>
                                            <th rowspan="1" colspan="1">Thao tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody style="text-align:center">
                                        @foreach ($all_order as $key => $order)
                                            <tr>
                                                <td>{{ $order->customer_name }}</td>
                                                <td>{{ $order->order_total }}</td>
                                                <td>{{ $order->order_status }}</td>
                                                <td>
                                                    <a style="margin-right: 20px"
                                                        href="{{ URL::to('/view-order/' . $order->order_id) }}">
                                                        <i class="fas fa-pen-square"
                                                            style="font-size:20px; color:#32CD32;"></i>
                                                    </a>
                                                    <a onclick="return confirm('Bạn chắc chắn là muốn xoá danh mục này chứ?')"
                                                        href="{{ URL::to('/delete-order/' . $order->order_id) }}">
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

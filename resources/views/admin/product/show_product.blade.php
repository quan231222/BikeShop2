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
                <h6 class="m-0 font-weight-bold text-primary">Danh sách thương hiệu</h6>
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
                                                Tên sản phẩm</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending">Giá
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending">Màu
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending">Hình
                                                ảnh</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending">Danh
                                                mục</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending">Thương
                                                hiệu</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending">Hiển
                                                thị</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending">Thao tác
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot style="text-align: center">
                                        <tr>
                                            <th rowspan="1" colspan="1">Tên sản phẩm</th>
                                            <th rowspan="1" colspan="1">Giá</th>
                                            <th rowspan="1" colspan="1">Màu</th>
                                            <th rowspan="1" colspan="1">Hình ảnh</th>
                                            <th rowspan="1" colspan="1">Danh mục</th>
                                            <th rowspan="1" colspan="1">Thương hiệu</th>
                                            <th rowspan="1" colspan="1">Hiển thị</th>
                                            <th rowspan="1" colspan="1">Thao tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody style=" text-align:center">
                                        @foreach ($all_product as $key => $pro)
                                            <tr>
                                                <td> {{ $pro->product_name }} </td>
                                                <td> {{ $pro->product_price }} </td>
                                                <td> {{ $pro->product_color }} </td>
                                                <td> <img src="public/uploads/product/{{ $pro->product_image }}"
                                                        width="100">
                                                </td>
                                                <td> {{ $pro->category_name }} </td>
                                                <td> {{ $pro->brand_name }} </td>

                                                <td><span class="text-ellipsis">

                                                        <?php
                                                if($pro->product_status == 0) {
                                                ?>
                                                        <a style="color:red;"
                                                            href="{{ URL::to('/active-product/ ' . $pro->product_id) }}"><span
                                                                class="fa fa-circle"></span></a>
                                                        <?php 
                                                } else {
                                                ?>
                                                        <a style="color:#32CD32"
                                                            href="{{ URL::to('/unactive-product/ ' . $pro->product_id) }}"><span
                                                                class="fa fa-circle"></span></a>
                                                        <?php
                                                }
                                                ?>

                                                    </span></td>
                                                <td>
                                                    <a href="{{ URL::to('/edit-product/ ' . $pro->product_id) }}">
                                                        <i class="fas fa-pen-square"
                                                            style="font-size:20px; color:#32CD32;"></i>
                                                    </a>
                                                    <a onclick="return confirm('Bạn chắc chắn là muốn xoá sản phẩm này chứ?')"
                                                        href="{{ URL::to('/delete-product/ ' . $pro->product_id) }}">
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
        {{ $all_product->links() }}
    </div>
@endsection

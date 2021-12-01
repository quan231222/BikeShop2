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
                <h6 class="m-0 font-weight-bold text-primary">Danh sách slider</h6>
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
                                                Tên slider</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 250px;">Hình ảnh</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 250px;">Mô tả</th>
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
                                            <th rowspan="1" colspan="1">Tên slider</th>
                                            <th rowspan="1" colspan="1">Hình ảnh</th>
                                            <th rowspan="1" colspan="1">Mô tả</th>
                                            <th rowspan="1" colspan="1">Tình trạng</th>
                                            <th rowspan="1" colspan="1" style="text-align:center;">Thao tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody style="text-align:center">
                                        @foreach ($all_slider as $key => $slider)
                                            <tr>
                                                <td>
                                                    <div>{{ $slider->slider_name }}</div>
                                                </td>
                                                <td><img src="public/uploads/slider/{{ $slider->slider_image }}"
                                                        height="100px" alt=" " alt=""></td>
                                                <td>{{ $slider->slider_desc }}</td>
                                                <td>
                                                    <span>
                                                        <?php
                                                            if($slider->slider_status == 0) {
                                                        ?>
                                                        <a style="color:red;"
                                                            href="{{ URL::to('/active-slider/ ' . $slider->slider_id) }}">
                                                            <span class="fas fa-circle"></span>
                                                        </a>
                                                        <?php 
                                                        } else {
                                                        ?>
                                                        <a style="color:#32CD32"
                                                            href="{{ URL::to('/unactive-slider/ ' . $slider->slider_id) }}">
                                                            <span class="fas fa-circle"></span>
                                                        </a>
                                                        <?php
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <a onclick="return confirm('Bạn chắc chắn là muốn xoá slider này chứ?')"
                                                        href="{{ URL::to('/delete-slider/ ' . $slider->slider_id) }}">
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

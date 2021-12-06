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
                <h6 class="m-0 font-weight-bold text-primary">Danh sách bài viết</h6>
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
                                                Tiêu đề bài viết</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 320px;">Mô tả
                                                bài viết</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending">Hình
                                                ảnh</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 170px;">Danh
                                                mục bài viết</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 100px;">Hiển
                                                thị</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 100px;">Thao tác
                                            </th>
                                        </tr>
                                    </thead>
                                    <tfoot style="text-align: center">
                                        <tr>
                                            <th rowspan="1" colspan="1">Tiêu đề bài viết</th>
                                            <th rowspan="1" colspan="1">Mô tả bài viết</th>
                                            <th rowspan="1" colspan="1">Hình ảnh</th>
                                            <th rowspan="1" colspan="1">Danh mục bài viết</th>
                                            <th rowspan="1" colspan="1">Hiển thị</th>
                                            <th rowspan="1" colspan="1" style="text-align:center;">Thao tác</th>
                                        </tr>
                                    </tfoot>
                                    <tbody style="text-align:center">
                                        @foreach ($post as $key => $value)
                                            <tr>
                                                <td>{{ $value->post_title }}</td>
                                                <td>{!! $value->post_desc !!}</td>
                                                <td><img src="public/uploads/post/{{ $value->post_image }}" height="100px"
                                                        alt=""></td>
                                                <td>{{ $value->category_post->cate_post_name }}</td>
                                                <td>
                                                    <span>
                                                        <?php
                                                            if($value->post_status == 0) {
                                                        ?>
                                                        <a style="color:red;"
                                                            href="{{ URL::to('/active-post/' . $value->post_id) }}">
                                                            <span class="fas fa-circle"></span>
                                                        </a>
                                                        <?php 
                                                        } else {
                                                        ?>
                                                        <a style="color:#32CD32"
                                                            href="{{ URL::to('/unactive-post/' . $value->post_id) }}">
                                                            <span class="fas fa-circle"></span>
                                                        </a>
                                                        <?php
                                                        }
                                                        ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <a style="margin-right: 20px"
                                                        href="{{ URL::to('/edit-post/' . $value->post_id) }}">
                                                        <i class="fas fa-pen-square"
                                                            style="font-size:20px; color:#32CD32;"></i>
                                                    </a>
                                                    <a onclick="return confirm('Bạn chắc chắn là muốn xoá thương hiệu này chứ?')"
                                                        href="{{ URL::to('/delete-post/' . $value->post_id) }}">
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
        {{ $post->links() }}

        {{-- <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Thao tác với excel</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="overflow: hidden;">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row" style="justify-content: space-around"> --}}
        {{-- Nhập dữ liệu excel --}}
        {{-- <div class="col-sm-5"
                                style="border: 1px solid #e3e6f0; padding: 10px; text-align: center">
                                <form action="{{ URL('import-excel-post') }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="file" name="file" accept=".xlsx" style="margin-bottom: 20px;"><br>
                                    <input type="submit" value="Nhập file excel" name="import_excel"
                                        class="btn btn-primary">
                                </form>
                            </div> --}}
        {{-- Xuất dữ liệu excel --}}
        {{-- <div class="col-sm-5"
                                style="border: 1px solid #e3e6f0; padding: 10px; text-align: center">
                                <form action="{{ URL('export-excel-post') }}" method="post">
                                    @csrf
                                    <p style="padding-top:5px">Click vào nút xuất file để tải file dữ liệu về!!!</p>
                                    <input type="submit" value="Xuất file excel" name="export_excel" class="btn btn-primary"
                                        style="margin-top: 5px">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection

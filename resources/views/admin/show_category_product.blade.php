@extends('admin_layout')
@section('content')
    <div class="content">
        <?php
            $message = Session::get('message');
            if($message){
                echo '<span style="color: red; font-weight: bold; font-size: 20px;" class="text-alert">'.$message.'</span>';
                Session::put('message',null);
            }
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Danh sách danh mục sản phẩm</h4>
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
                                        <th>Tên danh mục</th>
                                        <th>Hiển thị</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_category_product as $key => $cate_pro)
                                    <tr>
                                        <th style="width:20px;">
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox"><i></i>
                                            </label>
                                        </th>
                                        <td> {{ $cate_pro->category_name }} </td>
                                        <td><span class="text-ellipsis">
                            
                                            <?php
                                            if($cate_pro->category_status == 0) {
                                            ?>
                                            &emsp;&nbsp;&nbsp;<a style="color:red;" href="{{ URL::to('/active-category-product/ '.$cate_pro->category_id) }}"><span class="fa fa-circle"></span></a>
                                            <?php 
                                            } else {
                                            ?>
                                            &emsp;&nbsp;&nbsp;<a style="color:#32CD32" href="{{ URL::to('/unactive-category-product/ '.$cate_pro->category_id) }}"><span class="fa fa-circle"></span></a>
                                            <?php
                                            }
                                            ?>
                                        
                                        </span></td>
                                        <td>
                                            <a href="{{ URL::to('/edit-category-product/ ' .$cate_pro->category_id) }}" class="active styling-edit" ui-toggle-class="">
                                            <i class="fa fa-pencil-square-o text-success text-active"></i>
                                            </a>
                                            <a onclick="return confirm('Bạn chắc chắn là muốn xoá danh mục này chứ?')" href="{{ URL::to('/delete-category-product/ ' .$cate_pro->category_id) }}" class="active styling-edit" ui-toggle-class="">
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
@endsection

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
                        <h4 class="card-title">Danh sách sản phẩm</h4>
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
                                        <th>Tên sản phẩm</th>
                                        <th>Giá</th>
                                        <th>Màu</th>
                                        <th>Hình sản phẩm</th>
                                        <th>Danh mục</th>
                                        <th>Thương hiệu</th>
                                        <th>Hiển thị</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_product as $key => $pro)
                                    <tr>
                                        <th style="width:20px;">
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox"><i></i>
                                            </label>
                                        </th>
                                        <td> {{ $pro->product_name }} </td>
                                        <td> {{ $pro->product_price }} </td>
                                        <td> {{ $pro->product_color }} </td>
                                        <td> <img src="public/uploads/product/{{ $pro->product_image }}" width="100"> </td>
                                        <td> {{ $pro->category_name }} </td>
                                        <td> {{ $pro->brand_name }} </td>
                                        
                                        <td><span class="text-ellipsis">
                            
                                            <?php
                                            if($pro->product_status == 0) {
                                            ?>
                                            &emsp;&nbsp;&nbsp;<a style="color:red;" href="{{ URL::to('/active-product/ '.$pro->product_id) }}"><span class="fa fa-circle"></span></a>
                                            <?php 
                                            } else {
                                            ?>
                                            &emsp;&nbsp;&nbsp;<a style="color:#32CD32" href="{{ URL::to('/unactive-product/ '.$pro->product_id) }}"><span class="fa fa-circle"></span></a>
                                            <?php
                                            }
                                            ?>
                                        
                                        </span></td>
                                        <td>
                                            <a href="{{ URL::to('/edit-product/ ' .$pro->product_id) }}" class="active styling-edit" ui-toggle-class="">
                                            <i class="fa fa-pencil-square-o text-success text-active"></i>
                                            </a>
                                            <a onclick="return confirm('Bạn chắc chắn là muốn xoá sản phẩm này chứ?')" href="{{ URL::to('/delete-product/ ' .$pro->product_id) }}" class="active styling-edit" ui-toggle-class="">
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

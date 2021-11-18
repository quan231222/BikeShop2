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
                        <h4 class="card-title">Danh sách thương hiệu sản phẩm</h4>
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
                                        <th>Tên thương hiệu</th>
                                        <th>Hiển thị</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($all_brand_product as $key => $brand_pro)
                                    <tr>
                                        <th style="width:20px;">
                                            <label class="i-checks m-b-none">
                                                <input type="checkbox"><i></i>
                                            </label>
                                        </th>
                                        <td> {{ $brand_pro->brand_name }} </td>
                                        <td><span class="text-ellipsis">
                            
                                            <?php
                                            if($brand_pro->brand_status == 0) {
                                            ?>
                                            &emsp;&nbsp;&nbsp;<a style="color:red;" href="{{ URL::to('/active-brand-product/ '.$brand_pro->brand_id) }}"><span class="fa fa-circle"></span></a>
                                            <?php 
                                            } else {
                                            ?>
                                            &emsp;&nbsp;&nbsp;<a style="color:#32CD32" href="{{ URL::to('/unactive-brand-product/ '.$brand_pro->brand_id) }}"><span class="fa fa-circle"></span></a>
                                            <?php
                                            }
                                            ?>
                                        
                                        </span></td>
                                        <td>
                                            <a href="{{ URL::to('/edit-brand-product/ ' .$brand_pro->brand_id) }}" class="active styling-edit" ui-toggle-class="">
                                            <i class="fa fa-pencil-square-o text-success text-active"></i>
                                            </a>
                                            <a onclick="return confirm('Bạn chắc chắn là muốn xoá thương hiệu này chứ?')" href="{{ URL::to('/delete-brand-product/ ' .$brand_pro->brand_id) }}" class="active styling-edit" ui-toggle-class="">
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

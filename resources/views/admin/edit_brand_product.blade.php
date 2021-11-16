@extends('admin_layout')
@section('content')
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Sửa thương hiệu sản phẩm
            </header>
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
            <div class="panel-body">
                @foreach($edit_brand_product as $key => $edit_value)
                <div class="position-center">
                    <form role="form" action="{{URL::to('/update-brand-product/ '.$edit_value->brand_id)}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên thương hiệu</label>
                        <input type="text" value="{{$edit_value->brand_name}}" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả thương hiệu</label>
                        <textarea style="resize: none" rows = "6" name="brand_product_desc"
                        class="form-control" id="exampleInputPassword1" placeholder="Mô tả danh mục">{{$edit_value->brand_desc}}</textarea>
                    </div>
                    <button type="submit" name="update_brand_product" class="btn btn-info">Cập nhật thương hiệu</button>
                </form>
                </div>
                @endforeach
            </div>
        </section>
    </div>
@endsection

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
                        <h5 class="card-title" style="text-align: center">Thêm danh mục sản phẩm</h5>
                    </div>
                    <div class="card-body">

                        @foreach ($edit_category_product as $key => $edit_value)
                            <form action="{{ URL::to('/update-category-product/ ' . $edit_value->category_id) }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div style="margin: 0 auto; width: 60%">
                                        <div class="form-group">
                                            <label>Tên danh mục</label>
                                            <input type="text" value="{{ $edit_value->category_name }}"
                                                name="category_product_name" class="form-control"
                                                placeholder="Tên danh mục">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div style="margin: 0 auto; width: 60%">
                                        <div class="form-group">
                                            <label>Mô tả danh mục</label>
                                            <textarea name="category_product_desc" class="form-control textarea"
                                                placeholder="Mô tả danh mục"
                                                id="ckeditor1">{{ $edit_value->category_desc }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="update ml-auto mr-auto">
                                        <button type="submit" name="add_category_product"
                                            class="btn btn-primary btn-round">Cập nhật danh mục</button>
                                    </div>
                                </div>
                            </form>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

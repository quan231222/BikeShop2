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
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title" style="text-align: center">Thêm danh mục sản phẩm</h5>
              </div>
              <div class="card-body">
                
                <form action="{{URL::to('/save-category-product')}}" method="post">
                @csrf
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Tên danh mục</label>
                        <input type="text" name="category_product_name" class="form-control" placeholder="Tên danh mục">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Mô tả danh mục</label>
                        <textarea name="category_product_desc" class="form-control textarea" placeholder="Mô tả danh mục"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Hiển thị</label>
                        <select name="category_product_status" class="form-control input-sm m-bot15">
                            <option value="0" >Ẩn</option>
                            <option value="1" selected="selected">Hiển thị</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="add_category_product" class="btn btn-primary btn-round">Thêm danh mục</button>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
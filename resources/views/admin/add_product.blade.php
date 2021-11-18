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
                <h5 class="card-title" style="text-align: center">Thêm sản phẩm</h5>
              </div>
              <div class="card-body">
                
                <form action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" name="product_name" class="form-control" placeholder="Tên sản phẩm">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Giá sản phẩm</label>
                        <input type="text" name="product_price" class="form-control" placeholder="Giá sản phẩm">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Màu sản phẩm</label>
                        <input type="text" name="product_color" class="form-control" placeholder="Màu sản phẩm">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div style="margin-bottom: 20px">
                        <label>Hình ảnh sản phẩm</label>
                        <input type="file" name="product_image" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <textarea name="product_desc" class="form-control textarea" placeholder="Mô tả sản phẩm"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Nội dung sản phẩm</label>
                        <textarea name="product_content" class="form-control textarea" placeholder="Nội dung sản phẩm"></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Danh mục sản phẩm</label>
                        <select name="product_cate" class="form-control input-sm m-bot15">
                            @foreach ($cate_product as $key => $cate)
                                <option value="{{$cate->category_id}}" >{{$cate->category_name}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Thương hiệu sản phẩm</label>
                        <select name="product_brand" class="form-control input-sm m-bot15">
                            @foreach ($brand_product as $key => $brand)
                                <option value="{{$brand->brand_id}}" >{{$brand->brand_name}}</option>
                            @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Hiển thị</label>
                        <select name="product_status" class="form-control input-sm m-bot15">
                            <option value="0" >Ẩn</option>
                            <option value="1" selected="selected">Hiển thị</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="add_product" class="btn btn-primary btn-round">Thêm sản phẩm</button>
                    </div>
                  </div>
                </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
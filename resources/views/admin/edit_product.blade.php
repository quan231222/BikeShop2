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
                <h5 class="card-title" style="text-align: center">Cập nhật sản phẩm</h5>
              </div>
              <div class="card-body">
                
                
                @foreach ($edit_product as $key => $pro)
                <form action="{{URL::to('/update-product/ '.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                @csrf
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" name="product_name" class="form-control" value="{{$pro->product_name}}" placeholder="Tên sản phẩm">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Giá sản phẩm</label>
                        <input type="text" name="product_price" class="form-control" value="{{$pro->product_price}}" placeholder="Giá sản phẩm">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Màu sản phẩm</label>
                        <input type="text" name="product_color" class="form-control" value="{{$pro->product_color}}" placeholder="Màu sản phẩm">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div style="margin-bottom: 20px">
                        <label>Hình ảnh sản phẩm</label>
                        <input type="file" name="product_image" class="form-control">
                        <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}"  width=100>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Mô tả sản phẩm</label>
                        <textarea name="product_desc" class="form-control textarea" placeholder="Mô tả sản phẩm">{{$pro->product_desc}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Nội dung sản phẩm</label>
                        <textarea name="product_content" class="form-control textarea" placeholder="Nội dung sản phẩm">{{$pro->product_content}}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div style="margin: 0 auto; width: 60%">
                      <div class="form-group">
                        <label>Danh mục sản phẩm</label>
                        <select name="product_cate" class="form-control input-sm m-bot15">
                            @foreach ($cate_product as $key => $cate)
                                @if($cate->category_id == $pro->category_id)
                                <option selected value="{{$cate->category_id}}" >{{$cate->category_name}}</option>
                                @else
                                <option value="{{$cate->category_id}}" >{{$cate->category_name}}</option>
                                @endif
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
                                @if($brand->brand_id == $pro->brand_id)
                                <option selected value="{{$brand->brand_id}}" >{{$brand->brand_name}}</option>
                                @else
                                <option value="{{$brand->brand_id}}" >{{$brand->brand_name}}</option>
                                @endif
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
                      <button type="submit" name="add_product" class="btn btn-primary btn-round">Cập nhật sản phẩm</button>
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
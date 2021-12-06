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
                        <h5 class="card-title" style="text-align: center">Thêm bài viết</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ URL::to('/save-post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Tên bài viết</label>
                                        <input type="text" name="post_title" class="form-control"
                                            placeholder="Tiêu đề bài viết">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Tóm tắt bài viết</label>
                                        <textarea name="post_desc" id="ckeditor1" class="form-control textarea"
                                            placeholder="Tóm tắt bài biết"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Nội dung bài viết</label>
                                        <textarea name="post_content" id="ckeditor2" class="form-control textarea"
                                            placeholder="Nội dung bài biết"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div style="margin-bottom: 20px">
                                        <label>Hình ảnh bài viết</label>
                                        <input type="file" name="post_image" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Danh mục bài viết</label>
                                        <select name="cate_post_id" class="form-control input-sm m-bot15">
                                            @foreach ($cate_post as $key => $cate)
                                                <option value="{{ $cate->cate_post_id }}">{{ $cate->cate_post_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Hiển thị</label>
                                        <select name="post_status" class="form-control input-sm m-bot15">
                                            <option value="0">Ẩn</option>
                                            <option value="1" selected="selected">Hiển thị</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" name="add_post" class="btn btn-primary btn-round">Thêm
                                        bài viết</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

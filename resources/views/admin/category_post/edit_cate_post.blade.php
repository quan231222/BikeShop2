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
                <a href="{{ URL::to('/show-cate-post') }}" class="btn btn-primary btn-round"
                    style="margin-bottom: 10px">Quay
                    lại</a>
                <div class="card card-user">
                    <div class="card-header">
                        <h5 class="card-title" style="text-align: center">Cập nhật danh mục bài viết</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ URL::to('/update-cate-post/' . $category_post->cate_post_id) }}" method="post">
                            @csrf
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Tên danh mục bài viết</label>
                                        <input type="text" name="cate_post_name"
                                            value="{{ $category_post->cate_post_name }}" class="form-control"
                                            placeholder="Tên danh mục bài viết">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div style="margin: 0 auto; width: 60%">
                                    <div class="form-group">
                                        <label>Mô tả danh mục bài viết</label>
                                        <textarea name="cate_post_desc" class="form-control textarea"
                                            placeholder="Mô tả danh mục bài biết">{{ $category_post->cate_post_desc }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" name="add_cate_post" class="btn btn-primary btn-round">Cập nhật
                                        danh mục bài viết</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

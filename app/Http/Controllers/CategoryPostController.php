<?php

namespace App\Http\Controllers;

use App\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;


class CategoryPostController extends Controller
{
    public function AuthCheck()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function add_cate_post()
    {
        $this->AuthCheck();

        return view('admin.category_post.add_cate_post');
    }

    public function show_cate_post()
    {
        $this->AuthCheck();
        $category_post = CategoryPost::orderBy('cate_post_id', 'asc')->paginate(10);

        return view('admin.category_post.show_cate_post')->with(compact('category_post'));
    }

    public function save_cate_post(Request $request)
    {
        $this->AuthCheck();
        $data = $request->all();
        $category_post = new CategoryPost();
        $category_post->cate_post_name = $data['cate_post_name'];
        $category_post->cate_post_desc = $data['cate_post_desc'];
        $category_post->cate_post_status = $data['cate_post_status'];
        $category_post->save();

        Session::put('message', 'Thêm danh mục bài viết thành công');

        return redirect()->back();
    }

    public function active_cate_post($cate_post_id)
    {
        $this->AuthCheck();
        CategoryPost::find($cate_post_id)->update(['cate_post_status' => 1]);
        Session::put('message', 'Hiển thị danh mục bài viết thành công');

        return redirect()->back();
    }

    public function unactive_cate_post($cate_post_id)
    {
        $this->AuthCheck();
        CategoryPost::find($cate_post_id)->update(['cate_post_status' => 0]);
        Session::put('message', 'Ẩn danh mục bài viết thành công');

        return redirect()->back();
    }

    public function edit_cate_post($cate_post_id)
    {
        $this->AuthCheck();
        $category_post = CategoryPost::find($cate_post_id);

        return view('admin.category_post.edit_cate_post')
            ->with(compact('category_post'));
    }

    public function update_cate_post(Request $request, $cate_post_id)
    {
        $this->AuthCheck();
        $data = $request->all();
        $category_post = CategoryPost::find($cate_post_id);
        $category_post->cate_post_name = $data['cate_post_name'];
        $category_post->cate_post_desc = $data['cate_post_desc'];
        $category_post->save();

        Session::put('message', 'Cập nhật danh mục bài viết thành công');

        return redirect('/show-cate-post');
    }

    public function delete_cate_post($cate_post_id)
    {
        $this->AuthCheck();
        $category_post = CategoryPost::find($cate_post_id);
        $category_post->delete();

        Session::put('message', 'Xoá danh mục bài viết thành công');

        return redirect()->back();
    }

    public function cate_post($cate_post_id)
    {
    }
}

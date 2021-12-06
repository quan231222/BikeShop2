<?php

namespace App\Http\Controllers;

use App\CategoryPost;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
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

    public function add_post()
    {
        $this->AuthCheck();
        $cate_post = CategoryPost::orderBy('cate_post_id', 'asc')->get();

        return view('admin.post.add_post')->with(compact('cate_post'));
    }

    public function show_post()
    {
        $this->AuthCheck();
        $post = Post::with('category_post')
            ->orderBy('post_id', 'asc')
            ->paginate(10);

        return view('admin.post.show_post')
            ->with(compact('post'));
    }

    public function save_post(Request $request)
    {
        $this->AuthCheck();
        $data = $request->all();
        $post = new Post();
        $post->post_title = $data['post_title'];
        $post->post_desc = $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->cate_post_id = $data['cate_post_id'];
        $post->post_status = $data['post_status'];

        $get_image = $request->file('post_image');

        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . time() . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/post', $new_image);

            $post->post_image = $new_image;
            $post->save();

            Session::put('message', 'Thêm bài viết thành công');

            return redirect()->back();
        } else {
            Session::put('message', 'Bài viết mà không có hình ảnh à ? :D');

            return redirect()->back();
        }
    }

    public function active_post($post_id)
    {
        $this->AuthCheck();
        Post::find($post_id)->update(['post_status' => 1]);
        Session::put('message', 'Hiển thị bài viết thành công');

        return redirect()->back();
    }

    public function unactive_post($post_id)
    {
        $this->AuthCheck();
        Post::find($post_id)->update(['post_status' => 0]);
        Session::put('message', 'Ẩn bài viết thành công');

        return redirect()->back();
    }

    public function edit_post($post_id)
    {
        $this->AuthCheck();
        $cate_post = CategoryPost::orderBy('cate_post_id')->get();
        $post = Post::find($post_id);

        return view('admin.post.edit_post')->with(compact('post', 'cate_post'));
    }

    public function update_post(Request $request, $post_id)
    {
        $this->AuthCheck();
        $data = $request->all();
        $post = Post::find($post_id);
        $post->post_title = $data['post_title'];
        $post->post_desc = $data['post_desc'];
        $post->post_content = $data['post_content'];
        $post->cate_post_id = $data['cate_post_id'];

        $get_image = $request->file('post_image');

        if ($get_image) {
            $post_image_old = $post->post_image;
            $path = 'public/uploads/post/' . $post_image_old;
            unlink($path);

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . time() . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/post', $new_image);
            $post->post_image = $new_image;
        }
        $post->save();
        Session::put('message', 'Cập nhật bài viết thành công');

        return redirect('/show-post');
    }

    public function delete_post($post_id)
    {
        $this->AuthCheck();
        $post = Post::find($post_id);
        $post_image = $post->post_image;
        if ($post_image) {
            $path = 'public/uploads/post/' . $post_image;
            unlink($path);
        }
        $post->delete();

        Session::put('message', 'Xoá bài viết thành công');

        return redirect()->back();
    }

    //Trang chủ
    public function danh_muc_bai_viet($cate_post_id)
    {
        //Danh mục sản phẩm
        $cate_post = CategoryPost::orderBy('cate_post_id', 'asc')->get();
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1')
            ->orderBy('category_id', 'asc')
            ->get();
        $brand_product = DB::table('tbl_brand')
            ->where('brand_status', '1')
            ->orderBy('brand_id', 'asc')
            ->get();

        $post = Post::with('category_post')
            ->where('post_status', 1)
            ->where('cate_post_id', $cate_post_id)
            ->paginate(10);

        $name = CategoryPost::find($cate_post_id);
        $cate_post_name = $name->cate_post_name;

        return view('pages.post.cate_post')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('post', $post)
            ->with('cate_post_name', $cate_post_name)
            ->with('cate_post', $cate_post);
    }

    public function bai_viet($post_id)
    {
        //Danh mục sản phẩm
        $cate_post = CategoryPost::orderBy('cate_post_id', 'asc')->get();
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1')
            ->orderBy('category_id', 'asc')
            ->get();
        $brand_product = DB::table('tbl_brand')
            ->where('brand_status', '1')
            ->orderBy('brand_id', 'asc')
            ->get();

        $post = Post::with('category_post')
            ->where('post_status', 1)
            ->where('post_id', $post_id)
            ->take(1)
            ->get();

        $name = Post::find($post_id);
        $post_name = $name->post_title;

        foreach ($post as $key => $value) {
            $cate_post_id = $value->cate_post_id;
        }

        $related = Post::with('category_post')
            ->where('post_status', 1)
            ->where('cate_post_id', $cate_post_id)
            ->whereNotIn('post_id', [$post_id])
            ->take(5)->get();

        return view('pages.post.post')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('post', $post)
            ->with('post_name', $post_name)
            ->with('cate_post', $cate_post)
            ->with('related', $related);
    }
}

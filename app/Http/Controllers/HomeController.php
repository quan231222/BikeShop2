<?php

namespace App\Http\Controllers;

use App\CategoryPost;
use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        //Danh mục sản phẩm
        $cate_post = CategoryPost::orderBy('cate_post_id', 'asc')->get();

        //Slider
        $slider = Slider::orderBy('slider_id', 'asc')
            ->where('slider_status', '1')
            ->take('3')
            ->get();

        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1')
            ->orderBy('category_id', 'asc')
            ->get();
        $brand_product = DB::table('tbl_brand')
            ->where('brand_status', '1')
            ->orderBy('brand_id', 'asc')
            ->get();

        $all_product = DB::table('tbl_product')
            ->where('product_status', '1')
            ->orderBy('product_id', 'asc')
            ->limit(3)
            ->get();

        return view('pages.home')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product)
            ->with('slider', $slider)
            ->with('cate_post', $cate_post);
    }

    public function all_product()
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

        $all_product = DB::table('tbl_product')->paginate(9);

        return view('pages.sanpham.all_product')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product)
            ->with('cate_post', $cate_post);
    }

    public function contact()
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

        return view('pages.contact')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('cate_post', $cate_post);
    }

    public function about()
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

        return view('pages.about')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('cate_post', $cate_post);
    }

    public function search(Request $request)
    {
        $keyworks = $request->keywords_search;
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

        $search_result = DB::table('tbl_product')
            ->where('product_name', 'like', '%' . $keyworks . '%')
            ->get();

        return view('pages.sanpham.search')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('search_result', $search_result)
            ->with('cate_post', $cate_post);
    }

    public function send_mail()
    {
        $to_name = "";
        $to_email = "arabicbikeshop@gmail.com";

        $data = array("name" => "Có đơn đặt hàng", "body" => "Bạn hãy vào check đơn hàng đi!!!");

        Mail::send('pages.mail.send_mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject('Có đơn đặt hàng mới');
            $message->from($to_email, $to_name);
        });

        return redirect('/')->with('message', '');
    }
}

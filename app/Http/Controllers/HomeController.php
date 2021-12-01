<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        //Slider
        $slider = Slider::orderBy('slider_id', 'asc')->where('slider_status', '1')->take('3')->get();

        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderBy('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderBy('brand_id', 'asc')->get();

        // $all_product = DB::table('tbl_product')
        //     ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
        //     ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
        //     ->orderBy('tbl_product.product_id', 'asc')->get();

        $all_product = DB::table('tbl_product')->where('product_status', '1')->orderBy('product_id', 'asc')->limit(3)->get();

        return view('pages.home')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product)
            ->with('slider', $slider);
    }

    public function all_product()
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderBy('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderBy('brand_id', 'asc')->get();

        $all_product = DB::table('tbl_product')->paginate(3);

        return view('pages.sanpham.all_product')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product);
    }

    public function search(Request $request)
    {
        $keyworks = $request->keywords_search;
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderBy('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderBy('brand_id', 'asc')->get();

        $search_result = DB::table('tbl_product')->where('product_name', 'like', '%' . $keyworks . '%')->get();

        return view('pages.sanpham.search')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('search_result', $search_result);
    }
}

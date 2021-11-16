<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class BrandProductController extends Controller
{
    public function add_brand_product()
    {
        return view('admin.add_brand_product');
    }

    public function show_brand_product()
    {
        $all_brand_product = DB::table('tbl_brand')->get();
        $manager_brand_product = view('admin.show_brand_product')->with('all_brand_product', $all_brand_product);

        return view('admin_layout')->with('admin.show_brand_product', $manager_brand_product);
    }

    public function save_brand_product(Request $request)
    {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        $data['brand_status'] = $request->brand_product_status;

        DB::table('tbl_brand')->insert($data);
        Session::put('message', 'Thêm thương hiệu sản phẩm thành công');

        return Redirect::to('add-brand-product');
    }

    public function active_brand_product($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status' => 1]);
        Session::put('message', 'Hiển thị thương hiệu sản phẩm thành công');

        return Redirect::to('show-brand-product');
    }

    public function unactive_brand_product($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status' => 0]);
        Session::put('message', 'Ẩn thương hiệu sản phẩm thành công');

        return Redirect::to('show-brand-product');
    }

    public function edit_brand_product($brand_product_id)
    {
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id', $brand_product_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product', $edit_brand_product);

        return view('admin_layout')->with('admin.edit_brand_product', $manager_brand_product);
    }

    public function update_brand_product(Request $request, $brand_product_id)
    {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;

        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update($data);
        Session::put('message', 'Cập nhật thương hiệu sản phẩm thành công');

        return Redirect::to('show-brand-product');
    }

    public function delete_brand_product($brand_product_id)
    {
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->delete();
        Session::put('message', 'Xoá thương hiệu sản phẩm thành công');

        return Redirect::to('show-brand-product');
    }
}

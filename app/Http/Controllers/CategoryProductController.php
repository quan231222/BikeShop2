<?php

namespace App\Http\Controllers;

use App\CategoryPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Imports\ExcelImports;
use App\Exports\ExcelExports;
use CategoryProduct;
use Maatwebsite\Excel\Facades\Excel;

session_start();

class CategoryProductController extends Controller
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

    public function add_category_product()
    {
        $this->AuthCheck();

        return view('admin.category_product.add_category_product');
    }

    public function show_category_product()
    {
        $this->AuthCheck();
        $all_category_product = DB::table('tbl_category_product')->paginate(10);
        $manager_category_product = view('admin.category_product.show_category_product')->with('all_category_product', $all_category_product);

        return view('admin_layout')
            ->with('admin.category_product.show_category_product', $manager_category_product);
    }

    public function save_category_product(Request $request)
    {
        $this->AuthCheck();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message', 'Thêm danh mục sản phẩm thành công');

        return Redirect::to('add-category-product');
    }

    public function active_category_product($category_product_id)
    {
        $this->AuthCheck();
        DB::table('tbl_category_product')
            ->where('category_id', $category_product_id)
            ->update(['category_status' => 1]);
        Session::put('message', 'Hiển thị danh mục sản phẩm thành công');

        return Redirect::to('show-category-product');
    }

    public function unactive_category_product($category_product_id)
    {
        $this->AuthCheck();
        DB::table('tbl_category_product')
            ->where('category_id', $category_product_id)
            ->update(['category_status' => 0]);
        Session::put('message', 'Ẩn danh mục sản phẩm thành công');

        return Redirect::to('show-category-product');
    }

    public function edit_category_product($category_product_id)
    {
        $this->AuthCheck();
        $edit_category_product = DB::table('tbl_category_product')
            ->where('category_id', $category_product_id)
            ->get();
        $manager_category_product = view('admin.category_product.edit_category_product')->with('edit_category_product', $edit_category_product);

        return view('admin_layout')->with('admin.category_product.edit_category_product', $manager_category_product);
    }

    public function update_category_product(Request $request, $category_product_id)
    {
        $this->AuthCheck();
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;

        DB::table('tbl_category_product')
            ->where('category_id', $category_product_id)
            ->update($data);
        Session::put('message', 'Cập nhật danh mục sản phẩm thành công');

        return Redirect::to('show-category-product');
    }

    public function delete_category_product($category_product_id)
    {
        $this->AuthCheck();
        DB::table('tbl_category_product')
            ->where('category_id', $category_product_id)
            ->delete();
        Session::put('message', 'Xoá danh mục sản phẩm thành công');

        return Redirect::to('show-category-product');
    }

    //Nhập xuất excel
    public function import_excel(Request $request)
    {
        $path = $request->file('file')->getRealPath();
        Excel::import(new ExcelImports, $path);

        return back();
    }

    public function export_excel()
    {
        return Excel::download(new ExcelExports, 'CategoryProduct.xlsx');
    }


    //Xử lý giao diện
    public function show_category_home($category_id)
    {
        //Danh mục sản phẩm
        $cate_post = CategoryPost::orderBy('cate_post_id', 'asc')
            ->get();
        $cate_product = DB::table('tbl_category_product')
            ->where('category_status', '1')
            ->orderBy('category_id', 'asc')
            ->get();
        $brand_product = DB::table('tbl_brand')
            ->where('brand_status', '1')
            ->orderBy('brand_id', 'asc')
            ->get();

        $category_by_id = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_product.category_id', '=', 'tbl_category_product.category_id')
            ->where('tbl_product.category_id', $category_id)
            ->get();

        $category_name = DB::table('tbl_category_product')
            ->where('category_id', $category_id)
            ->limit(1)
            ->get();

        return view('pages.category.show_category')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('category_by_id', $category_by_id)
            ->with('category_name', $category_name)
            ->with('cate_post', $cate_post);
    }
}

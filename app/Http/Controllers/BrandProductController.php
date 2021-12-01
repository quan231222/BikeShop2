<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BrandExcelImports;
use App\Exports\BrandExcelExports;

session_start();

class BrandProductController extends Controller
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

    public function add_brand_product()
    {
        $this->AuthCheck();
        return view('admin.brand.add_brand_product');
    }

    public function show_brand_product()
    {
        $this->AuthCheck();
        $all_brand_product = DB::table('tbl_brand')->paginate(10);
        $manager_brand_product = view('admin.brand.show_brand_product')->with('all_brand_product', $all_brand_product);

        return view('admin_layout')->with('admin.brand.show_brand_product', $manager_brand_product);
    }

    public function save_brand_product(Request $request)
    {
        $this->AuthCheck();
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
        $this->AuthCheck();
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status' => 1]);
        Session::put('message', 'Hiển thị thương hiệu sản phẩm thành công');

        return Redirect::to('show-brand-product');
    }

    public function unactive_brand_product($brand_product_id)
    {
        $this->AuthCheck();
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update(['brand_status' => 0]);
        Session::put('message', 'Ẩn thương hiệu sản phẩm thành công');

        return Redirect::to('show-brand-product');
    }

    public function edit_brand_product($brand_product_id)
    {
        $this->AuthCheck();
        $edit_brand_product = DB::table('tbl_brand')->where('brand_id', $brand_product_id)->get();
        $manager_brand_product = view('admin.brand.edit_brand_product')->with('edit_brand_product', $edit_brand_product);

        return view('admin_layout')->with('admin.brand.edit_brand_product', $manager_brand_product);
    }

    public function update_brand_product(Request $request, $brand_product_id)
    {
        $this->AuthCheck();
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;

        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->update($data);
        Session::put('message', 'Cập nhật thương hiệu sản phẩm thành công');

        return Redirect::to('show-brand-product');
    }

    public function delete_brand_product($brand_product_id)
    {
        $this->AuthCheck();
        DB::table('tbl_brand')->where('brand_id', $brand_product_id)->delete();
        Session::put('message', 'Xoá thương hiệu sản phẩm thành công');

        return Redirect::to('show-brand-product');
    }

    //Nhập xuất excel
    public function import_excel(Request $request)
    {
        $path = $request->file('file')->getRealPath();
        Excel::import(new BrandExcelImports, $path);

        return back();
    }

    public function export_excel()
    {
        return Excel::download(new BrandExcelExports, 'Brand.xlsx');
    }

    //Xử lý giao diện
    public function show_brand_home($brand_id)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '1')->orderBy('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '1')->orderBy('brand_id', 'asc')->get();

        $brand_by_id = DB::table('tbl_product')
            ->join('tbl_brand', 'tbl_product.brand_id', '=', 'tbl_brand.brand_id')
            ->where('tbl_product.brand_id', $brand_id)
            ->get();

        $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_id', $brand_id)
            ->limit(1)
            ->get();

        return view('pages.brand.show_brand')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('brand_by_id', $brand_by_id)
            ->with('brand_name', $brand_name);
    }
}

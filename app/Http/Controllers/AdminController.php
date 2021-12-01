<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class AdminController extends Controller
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

    public function index()
    {
        return view('admin_login');
    }

    public function show_dashboard()
    {
        $this->AuthCheck();
        $category = DB::table('tbl_category_product')->count();
        $brand = DB::table('tbl_brand')->count();
        $product = DB::table('tbl_product')->count();
        $order = DB::table('tbl_order')->count();
        $slider = DB::table('tbl_slider')->count();
        $cou = DB::table('tbl_coupon')->count();

        return view('admin.dashboard')
            ->with('category', $category)
            ->with('brand', $brand)
            ->with('product', $product)
            ->with('order', $order)
            ->with('slider', $slider)
            ->with('cou', $cou);
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if ($result) {
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Tài khoản hoặc mật khẩu không chính xác. Vui lòng thử lại!');
            return Redirect::to('/admin');
        }
    }

    public function log_out()
    {
        $this->AuthCheck();
        Session::put('admin_name', null);
        Session::put('admin_id', null);

        return Redirect::to('/admin');
    }
}

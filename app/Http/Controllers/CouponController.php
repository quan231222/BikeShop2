<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class CouponController extends Controller
{
    public function add_coupon()
    {
        return view('admin.coupon.add_coupon');
    }

    public function insert_coupon(Request $request)
    {
        $data = $request->all();
        $coupon = new Coupon;

        $coupon->coupon_name = $data['coupon_name'];
        $coupon->coupon_code = $data['coupon_code'];
        $coupon->coupon_qty = $data['coupon_qty'];
        $coupon->coupon_type = $data['coupon_type'];
        $coupon->coupon_value = $data['coupon_value'];
        $coupon->save();

        Session::put('message', 'Thêm mã giảm giá thành công');
        return Redirect::to('/add-coupon');
    }

    public function show_coupon()
    {
        $coupon = Coupon::orderby('coupon_id', 'asc')->get();

        return view('admin.coupon.show_coupon')
            ->with(compact('coupon'));
    }

    public function delete_coupon($coupon_id)
    {
        $coupon = Coupon::find($coupon_id);
        $coupon->delete();

        Session::put('message', 'Xoá mã giảm giá thành công');
        return Redirect::to('/show-coupon');
    }
}

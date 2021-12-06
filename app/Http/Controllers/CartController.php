<?php

namespace App\Http\Controllers;

use App\CategoryPost;
use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class CartController extends Controller
{
    public function save_cart(Request $request)
    {
        $productID = $request->productid_hidden;
        $quantity = $request->qty;

        $product_info = DB::table('tbl_product')
            ->where('product_id', $productID)
            ->first();

        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = 23122002;
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        Cart::setGlobalTax(10);

        return Redirect::to('/show-cart');
    }

    public function show_cart()
    {
        //Danh mục sản phẩm
        $cate_post = CategoryPost::orderBy('cate_post_id', 'asc')->get();
        $cate_product = DB::table('tbl_category_product')
            ->orderBy('category_id', 'asc')
            ->get();
        $brand_product = DB::table('tbl_brand')
            ->orderBy('brand_id', 'asc')
            ->get();

        return view('pages.cart.show_cart')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('cate_post', $cate_post);
    }

    public function delete_pro_in_cart($rowId)
    {
        Cart::update($rowId, 0);

        return Redirect::to('/show-cart');
    }

    public function update_cart_qty(Request $request)
    {
        $rowId = $request->rowId_cart;
        $qty = $request->cart_qty;
        Cart::update($rowId, $qty);

        return Redirect::to('/show-cart');
    }

    public function check_coupon(Request $request)
    {
        $data = $request->all();
        $coupon = Coupon::where('coupon_code', $data['coupon'])->first();
        if ($coupon) {
            $count_coupon = $coupon->count();
            if ($count_coupon > 0) {
                $coupon_session = Session::get('coupon');
                if ($coupon_session == true) {
                    $is_availabe = 0;
                    if ($is_availabe == 0) {
                        $cou[] = array(
                            'coupon_code' => $coupon->coupon_code,
                            'coupon_type' => $coupon->coupon_type,
                            'coupon_value' => $coupon->coupon_value,
                        );
                        Session::put('coupon', $cou);
                    }
                } else {
                    $cou[] = array(
                        'coupon_code' => $coupon->coupon_code,
                        'coupon_type' => $coupon->coupon_type,
                        'coupon_value' => $coupon->coupon_value,
                    );
                    Session::put('coupon', $cou);
                }
                Session::save();
                return redirect()->back()->with('message', 'Thêm mã giảm giá thành công');
            }
        } else {
            return redirect()->back()->with('error', 'Thêm mã giảm giá bạn nhập không tồn tại');
        }
    }
}

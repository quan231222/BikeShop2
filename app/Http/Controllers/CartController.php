<?php

namespace App\Http\Controllers;

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

        $cate_product = DB::table('tbl_category_product')->orderBy('category_id', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->orderBy('brand_id', 'asc')->get();

        $data = DB::table('tbl_product')->where('product_id', $productID)->get();

        return view('pages.cart.show_cart')->with('category', $cate_product)->with('brand', $brand_product);
    }
}

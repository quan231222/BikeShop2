<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Giao diện
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'HomeController@index');
Route::post('/tim-kiem', 'HomeController@search');
Route::get('/all-product', 'HomeController@all_product');

//Danh mục sản phẩm trang chủ
Route::get('/danh-muc-san-pham/{category_id}', 'CategoryProductController@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_id}', 'BrandProductController@show_brand_home');
Route::get('/chi-tiet-san-pham/{product_id}', 'ProductController@detail_product');

//Quản trị
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@log_out');

//Danh mục sản phẩm
Route::get('/add-category-product', 'CategoryProductController@add_category_product');
Route::get('/edit-category-product/{category_product_id}', 'CategoryProductController@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProductController@delete_category_product');
Route::get('/show-category-product', 'CategoryProductController@show_category_product');
//Danh mục sản phẩm --  //Xử lý ẩn hiện
Route::get('/active-category-product/{category_product_id}', 'CategoryProductController@active_category_product');
Route::get('/unactive-category-product/{category_product_id}', 'CategoryProductController@unactive_category_product');
//Danh mục sản phẩm --  //Cập nhật
Route::post('/save-category-product', 'CategoryProductController@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'CategoryProductController@update_category_product');
//Danh mục sản phẩm -- //Nhập xuất excel
Route::post('/import-excel-cate', 'CategoryProductController@import_excel');
Route::post('/export-excel-cate', 'CategoryProductController@export_excel');


//Thương hiệu sản phẩm
Route::get('/add-brand-product', 'BrandProductController@add_brand_product');
Route::get('/edit-brand-product/{brand_product_id}', 'BrandProductController@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}', 'BrandProductController@delete_brand_product');
Route::get('/show-brand-product', 'BrandProductController@show_brand_product');
//Thương hiệu sản phẩm --  //Xử lý ẩn hiện
Route::get('/active-brand-product/{brand_product_id}', 'BrandProductController@active_brand_product');
Route::get('/unactive-brand-product/{brand_product_id}', 'BrandProductController@unactive_brand_product');
//Thương hiệu sản phẩm --  //Cập nhật
Route::post('/save-brand-product', 'BrandProductController@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}', 'BrandProductController@update_brand_product');
//Thương hiệu sản phẩm -- //Nhập xuất excel
Route::post('/import-excel-brand', 'BrandProductController@import_excel');
Route::post('/export-excel-brand', 'BrandProductController@export_excel');

//Sản phẩm
Route::get('/add-product', 'ProductController@add_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
Route::get('/show-product', 'ProductController@show_product');
//Sản phẩm --  //Xử lý ẩn hiện
Route::get('/active-product/{product_id}', 'ProductController@active_product');
Route::get('/unactive-product/{product_id}', 'ProductController@unactive_product');
//Sản phẩm --  //Cập nhật
Route::post('/save-product', 'ProductController@save_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');


//Giỏ hàng
Route::post('/save-cart', 'CartController@save_cart');
Route::post('/update-cart-qty', 'CartController@update_cart_qty');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-pro-in-cart/{rowId}', 'CartController@delete_pro_in_cart');


//Thanh toán
Route::get('/login-checkout', 'CheckoutController@login_checkout');
Route::get('/logout-checkout', 'CheckoutController@logout_checkout');
Route::get('/signup-checkout', 'CheckoutController@signup_checkout');
Route::post('/add-customer', 'CheckoutController@add_customer');
Route::post('/login-customer', 'CheckoutController@login_customer');
Route::post('/order-save', 'CheckoutController@order_save');
Route::get('/checkout', 'CheckoutController@checkout');
Route::get('/payment', 'CheckoutController@payment');
Route::post('/save-checkout-customer', 'CheckoutController@save_checkout_customer');

//Mã giảm giá
Route::post('/check-coupon', 'CartController@check_coupon');
//Mã giảm giá-Admin
Route::get('/add-coupon', 'CouponController@add_coupon');
Route::get('/show-coupon', 'CouponController@show_coupon');
Route::get('/delete-coupon/{coupon_id}', 'CouponController@delete_coupon');
Route::post('/insert-coupon', 'CouponController@insert_coupon');

//Đơn hàng
Route::get('/manage-order', 'CheckoutController@manage_order');
Route::get('/view-order/{order_id}', 'CheckoutController@view_order');

//Slider
Route::get('/add-slider', 'SliderController@add_slider');
Route::get('/show-slider', 'SliderController@show_slider');
Route::post('/save-slider', 'SliderController@save_slider');
Route::get('/active-slider/{slider_id}', 'SliderController@active_slider');
Route::get('/unactive-slider/{slider_id}', 'SliderController@unactive_slider');
Route::get('/delete-slider/{slider_id}', 'SliderController@delete_slider');

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

//Xử Lý
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@log_out');

//Danh mục sản phẩm
Route::get('/add-category-product', 'CategoryProductController@add_category_product');
Route::get('/edit-category-product/{category_product_id}', 'CategoryProductController@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProductController@delete_category_product');
Route::get('/show-category-product', 'CategoryProductController@show_category_product');

Route::get('/active-category-product/{category_product_id}', 'CategoryProductController@active_category_product');
Route::get('/unactive-category-product/{category_product_id}', 'CategoryProductController@unactive_category_product');

Route::post('/save-category-product', 'CategoryProductController@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'CategoryProductController@update_category_product');

//Thương hiệu sản phẩm
Route::get('/add-brand-product', 'BrandProductController@add_brand_product');
Route::get('/edit-brand-product/{brand_product_id}', 'BrandProductController@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}', 'BrandProductController@delete_brand_product');
Route::get('/show-brand-product', 'BrandProductController@show_brand_product');

Route::get('/active-brand-product/{brand_product_id}', 'BrandProductController@active_brand_product');
Route::get('/unactive-brand-product/{brand_product_id}', 'BrandProductController@unactive_brand_product');

Route::post('/save-brand-product', 'BrandProductController@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}', 'BrandProductController@update_brand_product');
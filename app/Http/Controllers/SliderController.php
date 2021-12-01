<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();

class SliderController extends Controller
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
    public function show_slider()
    {
        $all_slider = Slider::orderBy('slider_id', 'asc')->get();

        return view('admin.slider.show_slider')->with(compact('all_slider'));
    }

    public function add_slider()
    {

        return view('admin.slider.add_slider');
    }

    public function save_slider(Request $request)
    {
        $data = $request->all();
        $this->AuthCheck();


        $get_image = $request->file('slider_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . time() . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/slider', $new_image);

            $slider = new Slider();
            $slider->slider_name = $data['slider_name'];
            $slider->slider_image = $new_image;
            $slider->slider_status = $data['slider_status'];
            $slider->slider_desc = $data['slider_desc'];
            $slider->save();

            Session::put('message', 'Thêm slider thành công');
            return Redirect::to('add-slider');
        } else {
            Session::put('message', 'Thiếu hình ảnh rồi :D');
            return Redirect::to('add-slider');
        }
    }

    public function active_slider($slider_id)
    {
        $this->AuthCheck();
        DB::table('tbl_slider')->where('slider_id', $slider_id)->update(['slider_status' => 1]);
        Session::put('message', 'Hiển thị slider thành công');

        return Redirect::to('show-slider');
    }

    public function unactive_slider($slider_id)
    {
        $this->AuthCheck();
        DB::table('tbl_slider')->where('slider_id', $slider_id)->update(['slider_status' => 0]);
        Session::put('message', 'Ẩn slider thành công');

        return Redirect::to('show-slider');
    }

    public function delete_slider($slider_id)
    {
        $this->AuthCheck();
        DB::table('tbl_slider')->where('slider_id', $slider_id)->delete();
        Session::put('message', 'Xoá Slider thành công');

        return Redirect::to('show-slider');
    }
}
